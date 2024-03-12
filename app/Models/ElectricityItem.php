<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Electricity;

class ElectricityItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'electricity_id',
        'date',
        'month',
        'unit',
        'due_date',
        'total',
    ];

    public function electricity()
    {
        return $this->belongsTo(Electricity::class);
    }
}
