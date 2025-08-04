<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WantlistToHashtag extends Model
{
    protected $table = 'wantlist_to_hashtag';
    
    protected $fillable = [
        'want_goods_ID',
        'hashtag_list',
        'delete_flag'
    ];

    protected $casts = [
        'delete_flag' => 'boolean'
    ];
}
