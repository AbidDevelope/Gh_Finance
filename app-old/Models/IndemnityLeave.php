<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class IndemnityLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'date',
        'cheque_number_receipt_number',
        'description',
        'beneficiary',
        'amount_deposited',
        'amount_withdrawn',
        'project_name',
        'service_type',
        'remarks',
        'total_in_account',
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
