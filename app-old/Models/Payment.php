<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'paymentMode',
        'payment_date',
        'amount',
        'receivable',
        'chequeNumber',
        'bankName',
        'transactionId',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
