<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'project',
        'purchase_from',
        'purchase_date',
        'purchase_by',
        'amount',
        'paid_by',
        'attachments',
        'description',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
