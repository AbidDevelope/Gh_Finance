<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PayrollItem;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'remarks',
        'subtotal',
        'others',
        'grandtotal',
        'total_payment',
    ];

    public function payrollItems()
    {
        return $this->hasMany(PayrollItem::class);
    }
}
