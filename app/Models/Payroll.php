<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PayrollItem;
use App\Models\PayrollPayment;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_date',
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

    public function payrollPayment()
    {
        return $this->hasMany(PayrollPayment::class);
    }
}
