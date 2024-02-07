<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'beneficiary_id', 'tax', 'invoice_date', 'due_date', 'subtotal', 'discount',
    ];

    public function beneficiaries()
    {
        return $this->belongsto(Beneficiary::class, 'beneficiary_id');
    }
}
