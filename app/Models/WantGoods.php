<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WantGoods extends Model
{
    protected $table = 'want_goods';
    
    protected $fillable = [
        'want_goods_name',
        'account_ID',
        'category_id',
        'exposition',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
