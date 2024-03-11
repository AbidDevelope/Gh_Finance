<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rent;

class RentItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'rent_id',
        'year',
        'month',
        'date',
        'rent_amount',
        'used_by',
        'total',
    ];

    public function rents()
    {
        return $this->belongsTo(Rent::class);
    }
}
