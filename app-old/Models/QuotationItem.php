<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quotation;

class QuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotation_id', 'description', 'unit', 
        'qty', 'price', 'total', 'status'
    ];

    public function quotations()
    {
       return $this->belongsTo(Quotation::class);
    }
}
