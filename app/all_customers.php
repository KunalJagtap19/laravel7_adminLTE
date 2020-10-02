<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class all_customers extends Model
{
    protected $fillable = [
        'name', 'account_number', 'nominee_name', 'daily_amount'
    ];
}
