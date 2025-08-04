<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsImg extends Model
{
    protected $table = 'goods_img';
    
    protected $fillable = [
        'img_pass',
        'goods_id',
        'displayorder_number',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
