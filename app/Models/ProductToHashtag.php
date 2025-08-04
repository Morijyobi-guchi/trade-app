<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToHashtag extends Model
{
    protected $table = 'product_to_hashtag';
    
    protected $fillable = [
        'goods_id',
        'hashtag_list',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
