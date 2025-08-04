<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToWantgoodsToHashtag extends Model
{
    protected $table = 'product_to_wantgoods_to_hashtag';
    
    protected $fillable = [
        'goods_ID',
        'want_goods_ID',
        'hashtag_list',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
