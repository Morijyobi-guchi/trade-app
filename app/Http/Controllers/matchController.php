<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matchController extends Controller
{
    public function matchTags()
    {
        //ユーザーが現在出品した出品物のハッシュタグ
        $mothertag = ['ドラゴンボール','全巻','フリーザ'];
        //出品物とほしいものとハッシュタグテーブルのハッシュタグ
        $matchtag = [
            '1' => ['全巻','孫悟空','ドラゴンボール','フリーザ','戦闘'],
            '2' => ['ワンピース','海賊','ルフィ','冒険','海'],
            '3' => ['フリーザ','悪役','ドラゴンボール','宇宙','帝王'],
            '4' => ['ナルト','忍者','火影','木の葉','うずまき'],
            '5' => ['進撃の巨人','壁','エレン','調査兵団','巨人']
        ];
        //すでに出品されている出品物のハッシュタグ
        $goodstag = [
            '1' => ['ヒロアカ','漫画','ジャンプ','オールマイト','個性'],
            '2' => ['アメコミ','ダークナイト','バットマン','DC','ゴッサム'],
            '3' => ['アメコミ','スーパーマン','クラーク・ケント','クリプトン','DC'],
            '4' => ['マーベル','アメコミ','アイアンマン','かっこいい','マーク3'],
            '5' => ['マーベル','ソー','アメコミ','ムジョルニア','雷'],
        ];
        //ユーザーが出品物に登録したほしいもののハッシュタグ
        $mywanttag = [
            '1' => ['ジャンプ','オールマイト','ヒロアカ'],
            '2' => ['特撮','ウルトラマン','巨大','怪獣','ベリアル'],
            '3' => ['戦隊','シンケンジャー','侍','レッド','剣'],
        ];

        // 各配列と$mothertagをマッチング
        foreach($matchtag as $key => $tags){
            $matchedTags = array_intersect($tags, $mothertag);
            
            echo "<h3>{$key}の結果:</h3>";
            
            if(!empty($matchedTags)){
                echo "一致したタグ: " . implode(', ', array_values($matchedTags));
                
                // 三つ以上一致したかチェック
                if(count($matchedTags) >= 3){
                    echo " → <strong>マッチしました！</strong><br>";
                    
                    // 同じ番号のgoodstagと全てのmywanttagをチェック
                    if(isset($goodstag[$key])){
                        echo "対応するgoodstag[{$key}]との比較:<br>";
                        
                        foreach($mywanttag as $wantKey => $wantTags){
                            $goodsMatched = array_intersect($goodstag[$key], $wantTags);
                            
                            if(count($goodsMatched) >= 3){
                                echo "mywanttag[{$wantKey}]と3つ以上一致: " . implode(', ', array_values($goodsMatched));
                                echo " → <strong style='color: red;'>マッチング成功！</strong><br>";
                            } else if(!empty($goodsMatched)){
                                echo "mywanttag[{$wantKey}]と一致: " . implode(', ', array_values($goodsMatched)) . " (不十分)<br>";
                            }
                        }
                    }
                }
            } else {
                echo "一致するタグがありません";
            }
            
            echo "<br>";
        }
        
    }
}
