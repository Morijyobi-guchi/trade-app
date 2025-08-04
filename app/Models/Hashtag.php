<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $table = 'hashtag';
    
    protected $fillable = [
        'hashtag_name'
    ];
}
