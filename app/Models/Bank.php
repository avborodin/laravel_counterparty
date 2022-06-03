<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
      'counterparty_id', 'bank_name', 'bik', 'correspondent_account', 'checking_account', 'account_type', 'current_id'
    ];
}
