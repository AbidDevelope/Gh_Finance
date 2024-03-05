<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\InvoiceItem;
use App\Models\Project;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number', 'project_id', 'invoice_date', 'due_date', 'subtotal', 'discount', 'grandValue'
    ];

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
