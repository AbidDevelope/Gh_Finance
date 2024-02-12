<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'beneficiary_id', 'project_id', 'quotation_number', 'quotation_date', 
        'valid_until', 'subtotal', 'others', 'grandtotal', 'status'
    ];

    public function beneficiaries()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
