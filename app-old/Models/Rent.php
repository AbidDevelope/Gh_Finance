<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RentItem;
use App\Models\ExpensePayment;
use App\Models\Expense;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'rent_date',
        'remarks',
        'subtotal',
        'others',
        'grandtotal',
        'total_payment',
    ];

    public function rentItems()
    {
        return $this->hasMany(RentItem::class);
    }

    public function rentPayment()
    {
        return $this->hasMany(ExpensePayment::class, 'expense_type_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'expense_type_id');
    }
}
