<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matchController extends Controller
{
    public function matchTags()
    {
        $mothertag = ['ドラゴンボール','全巻','フリーザ'];
        $matchtag = [
            'item1' => ['全巻','孫悟空','ドラゴンボール'],
            'item2' => ['ワンピース','全巻','冒険'],
            'item3' => ['フリーザ','悪役','ドラゴンボール'],
            'item4' => ['ナルト','忍者','火影'],
            'item5' => ['全巻','フリーザ','最終形態']
        ];

        // 各配列と$mothertagをマッチング
        foreach($matchtag as $key => $tags){
            $matchedTags = array_intersect($tags, $mothertag);
            
            echo "{$key}の結果:";
            
            if(!empty($matchedTags)){
                echo "一致したタグ: " . implode(', ', array_values($matchedTags));
                
                // 二つ以上一致したかチェック
                if(count($matchedTags) >= 2){
                    echo "マッチしました！";
                }
            } else {
                echo "一致するタグがありません";
            }
            
            echo "";
        }
        
        return $matchtag;
    }
}
