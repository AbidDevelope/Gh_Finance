<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseItem;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'subtotal',
        'others',
        'grandtotal',
        ];

    public function expenseItem()
    {
        return $this->hasMany(ExpenseItem::class, 'expenses_id');
    }    
}
