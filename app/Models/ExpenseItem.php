<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expense;

class ExpenseItem extends Model
{
    use HasFactory;

    protected $fillable = [
       'expenses_id',
       'description',
       'month',
       'date',
       'receipt',
       'amount_deposite',
       'amount_withdrawn',
       'beneficiary',
       'total',
    ];

    public function expenses()
    {
        return $this->belongsTo(Expense::class);
    }
}
