<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Miscellaneous;

class MiscellaneousItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'miscellaneous_id',
        'description',
        'month',
        'date',
        'total',
    ];

    public function miscellaneous()
    {
        return $this->belongsTo(Miscellaneous::class);
    }
}
