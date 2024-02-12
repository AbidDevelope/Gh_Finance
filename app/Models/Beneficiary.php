<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\Quotation;

class Beneficiary extends Model
{
    use HasFactory;
    protected $fillable = [
        'beneficiary',
        'email',
        'mobile',
        'beneficiary_address',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }
}
