<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PettyCash extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'cheque_number_receipt_number',
        'description',
        'beneficiary',
        'amount_deposited',
        'amount_withdrawn',
        'project',
        'total_amount_deposited',
        'total_amount_withdrawn',
        'total_in_account',
    ];
}
