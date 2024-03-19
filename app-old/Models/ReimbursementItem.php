<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reimbursement;

class ReimbursementItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'reimbursement_id',
        'description',
        'date',
        'employee_name',
        'total',
    ];

    public function Reimbursement()
    {
        return $this->belongsTo(Reimbursement::class);
    }
}
