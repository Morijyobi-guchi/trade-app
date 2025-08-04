<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsToWantgoods extends Model
{
    protected $table = 'goods_to_wantgoods';
    
    protected $fillable = [
        'goods_ID',
        'want_goods_ID',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
