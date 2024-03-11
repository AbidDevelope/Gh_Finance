<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rent;

class ExpensePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'expense_type_id',
        'expense_type',
        'payment_mode',
        'payment_date',
        'amount',
        'cheque_number',
        'bank_name',
        'receivable_by',
        'transaction_id',
    ];

    public function rents()
    {
        return $this->belongsTo(Rent::class);
    }
}
