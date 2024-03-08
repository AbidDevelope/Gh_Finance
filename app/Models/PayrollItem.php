<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payroll;
use App\Models\PayrollPayment;

class PayrollItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_id',
        'date',
        'month',
        'employee_name',
        'actual_salary',
        'payroll',
        'salary',
    ];

    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }

   

}
