<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectricityItem;
use App\Models\ExpensePayment;
use App\Models\Expense;

class Electricity extends Model
{
    use HasFactory;

    protected $fillable = [
        'electricity_date',
        'remarks',
        'file',
        'subtotal',
        'others',
        'grandtotal',
        'total_payment',
    ];

    public function electricityItems()
    {
        return $this->hasMany(ElectricityItem::class);
    }

    public function expensePayment()
    {
        return $this->hasMany(ExpensePayment::class, 'expense_type_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'expense_type_id');
    }
}
