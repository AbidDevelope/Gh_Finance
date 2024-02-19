<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\InvoiceItem;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number', 'beneficiary_id', 'tax', 'invoice_date', 'due_date', 'subtotal', 'discount',
    ];

    // public function beneficiaries()
    // {
    //     return $this->belongsto(Beneficiary::class, 'beneficiary_id');
    // }

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
