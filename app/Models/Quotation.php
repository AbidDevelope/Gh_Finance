<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\QuotationItem;
use App\Models\Project;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 
        'quotation_number',
        'quotation_date', 
        'subtotal',
        'others', 
        'grandtotal',
    ];

    public function beneficiaries()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function quotationItems()
    {
        return $this->hasMany(QuotationItem::class);
    }

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
