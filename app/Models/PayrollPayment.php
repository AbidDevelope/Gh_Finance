<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_id',
        'payment_mode',
        'date',
        'amount',
        'receivable_by',
        'cheque_number',
        'bank_name',
        'transaction_id',
    ];
}
