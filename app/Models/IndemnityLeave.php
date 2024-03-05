<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndemnityLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'sr_no',
        'date',
        'cheque_number_receipt_number',
        'description',
        'beneficiary',
        'amount_deposited',
        'amount_withdrawn',
        'project_name',
        'service_type',
        'remarks',
    ];
}
