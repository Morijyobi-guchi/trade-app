<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
    
    protected $fillable = [
        'goods_name',
        'category_id',
        'situation_id',
        'transaction_type',
        'size',
        'quantity',
        'explanation',
        'listing_deadline',
        'trading_status_id',
        'account_id',
        'show_flag'
    ];

    protected $casts = [
        'listing_deadline' => 'date',
        'transaction_type' => 'integer',
        'show_flag' => 'integer'
    ];

    public function image()
    {
        return $this->hasOne(GoodsImg::class, 'goods_id', 'id')
                    ->where('displayorder_number',1);
    }




}
