<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WantGoodsImg extends Model
{
    protected $table = 'want_goods_img';
    
    protected $fillable = [
        'image_path',
        'want_goods_id',
        'displayorder_number',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
