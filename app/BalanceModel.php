<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalanceModel extends Model
{
    //
    protected $fillable = [
        'example-search-input',
        'example-text-input',
        'example-email-input',
        'example-tel-input',
        'example-number-input',
    ];

    protected $table = 'balance';
}
