<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Goods;
use App\Models\GoodsImg;
class topcontroller extends Controller
{
    //画像と、出品名を取ってくる
    public function goods(){
        $goods = Goods::where('delete_flag',0)
        ->orderby('created_at','desc')
        ->select('id','goods_name')
        ->get();
        $goodsimg = GoodsImg::where('delete_flag',0)
        ->where('displayorder_number',1)
        ->orderby('created_at','desc')
        ->select('id','img_pass','goods_id')
        ->get();
        return view('top',['goods'=>$goods,'goodsimg'=>$goodsimg]);
    }


    
    

}

