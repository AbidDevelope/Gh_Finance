<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MiscellaneousItem;
use App\Models\Expense;

class Miscellaneous extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal',
        'others',
        'grandtotal',
    ];

    public function miscellaneousItems()
    {
        return $this->hasMany(MiscellaneousItem::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'expense_type_id');
    }
}
