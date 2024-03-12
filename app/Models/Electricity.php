<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectricityItem;
use App\Models\ExpensePayment;

class Electricity extends Model
{
    use HasFactory;

    protected $fillable = [
        'electricity_date',
        'remarks',
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
        return $this->hasMany(ExpensePayment::class, 'id');
    }
}
