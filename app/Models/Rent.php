<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RentItem;
use App\Models\ExpensePayment;

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
}
