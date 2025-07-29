<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    
    protected $fillable = [
        'user_name',
        'mail_address',
        'department',
        'entry_year',
        'password',
        'account_expiration_date',
        'delete_flag'
    ];

    protected $casts = [
        'account_expiration_date' => 'date',
        'delete_flag' => 'boolean'
    ];
}
