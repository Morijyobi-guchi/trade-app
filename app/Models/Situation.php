<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    protected $table = 'situation';
    
    protected $fillable = [
        'goods_situation',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
