<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WantGoods;
use App\Models\Category;
use App\Models\Situation;

class goodsController extends Controller
{
    public function getWantGoods()
    {
        // account_IDが1でdelete_flagが0のwant_goods_nameを取得
        $wantGoodsNames = WantGoods::where('account_ID', 1)
                                  ->where('delete_flag', 0)
                                  ->get(['id','want_goods_name', 'category_id', 'exposition']);
        
        // カテゴリも取得
        $category = Category::where('delete_flag', 0)->get();
        $situation = Situation::where('delete_flag', 0)->get();
        
        // 両方のデータをビューに渡す
        return view('regster', [
            'wantGoods' => $wantGoodsNames,
            'category' => $category,
            'situation' => $situation,
        ]);
    }

    public function store(Request $request)
    {

        $category_name = Category::where('id',$request->input('category_id'))->value('category');
        $situation_name = Situation::where('id',$request->input('situation_id'))->value('goods_situation');

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    // ファイルを一時的に保存し、パスを配列に追加
                    $path = $image->store('temp', 'public');
                    $imagePaths[] = $path;
                }
            }
        }
        // セッションにデータを保存
        $request->session()->put('form_data', [
            'goods_name' => $request->input('goods_name'),
            'category_id' => $request->input('category_id'),
            'category_name' => $category_name,
            'situation_name' => $situation_name,
            'situation_id' => $request->input('situation_id'),
            'explanation' => $request->input('explanation'),
            'listing_deadline' => $request->input('listing_deadline'),
            'transaction_type' => $request->input('transaction_type'),
            'hashtags' => array_filter($request->input('hashtags', [])),
            'want_goods_ids' => $request->input('want_goods_ids', []),
            'image_paths' => $imagePaths
        ]);

        return redirect()->route('goods.confirm');
    }

    public function confirm(Request $request)
    {
        $formData = $request->session()->get('form_data');
        
        if (!$formData) {
            return redirect()->route('register')->with('error', 'フォームデータが見つかりません');
        }

        // ほしいものの詳細情報を取得
        $wantGoodsDetails = [];
        if (!empty($formData['want_goods_ids'])) {
            $wantGoodsDetails = WantGoods::whereIn('id', $formData['want_goods_ids'])
                                        ->get(['id', 'want_goods_name'])
                                        ->toArray();
        }

        return view('confirm', [
            'formData' => $formData,
            'wantGoodsDetails' => $wantGoodsDetails
        ]);
    }

    public function create(Request $request)
    {
        $formData = $request->session()->get('form_data');

        if (!$formData) {
            return redirect()->route('register')->with('error', 'セッションデータが見つかりません。もう一度やり直してください。');
        }

        try {
            DB::transaction(function () use ($formData, $request) {
                // 1. goodsテーブルにデータを保存
                $goods = Goods::create([
                    'goods_name' => $formData['goods_name'],
                    'category_id' => $formData['category_id'],
                    'situation_id' => $formData['situation_id'],
                    'explanation' => $formData['explanation'],
                    'listing_deadline' => $formData['listing_deadline'],
                    'transaction_type' => $formData['transaction_type'],
                    'account_id' => 1, // TODO: ログインしているユーザーのIDに後で修正
                    'trading_status_id' => 1, // '出品中'など
                    'show_flag' => 1,
                ]);

                // 2. 画像を処理
                if (!empty($formData['image_paths'])) {
                    foreach ($formData['image_paths'] as $index => $tempPath) {
                        $extension = pathinfo(storage_path('app/public/' . $tempPath), PATHINFO_EXTENSION);
                        $newFileName = 'g_' . $goods->id . '_' . ($index + 1) . '.' . $extension;
                        $newPath = 'images/goods/' . $newFileName;

                        // public/temp から public/images/goods へファイルを移動
                        Storage::disk('public')->move($tempPath, $newPath);

                        // 3. goods_imgテーブルに画像の情報を保存
                        GoodsImg::create([
                            'goods_id' => $goods->id,
                            'img_pass' => $newPath,
                            'displayorder_number' => $index + 1,
                            'delete_flag' => 0,
                        ]);
                    }
                }

                // TODO: ハッシュタグ、ほしいものの関連テーブルへの保存処理をここに追加

                // 4. 処理が完了したらセッションデータを削除
                $request->session()->forget('form_data');
            });
        } catch (\Exception $e) {
            // エラーが発生した場合はロールバックされ、エラーメッセージと共にリダイレクト
            return redirect()->route('register')->with('error', '出品処理中にエラーが発生しました。' . $e->getMessage());
        }

        // 5. 完了ページへリダイレクト
        return redirect()->route('register')->with('success', '出品が完了しました！');
    }
}
