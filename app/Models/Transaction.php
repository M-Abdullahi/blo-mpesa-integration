<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'transaction_type',
        'customer_id',
        'transaction_id',
        'transaction_time',
        'short_code',
        'invoice_number',
        'bill_ref_number',
        'third_party_trans_id',
        'msisdn',
        'amount',
        'org_account_balance',
    ];
}


