<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'beneficiary_id', 'description', 'unit', 'qty', 'price', 'total'
    ];

    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
}
