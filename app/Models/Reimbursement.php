<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReimbursementItem;

class Reimbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'reimbursement_date',
        'remarks',
        'subtotal',
        'others',
        'grandtotal',
        'total_payment',
    ];

    public function reimbursementItems()
    {
        return $this->hasMany(ReimbursementItem::class);
    }

    public function expensePayment()
    {
        return $this->hasMany(ExpensePayment::class, 'expense_type_id');
    }

}
