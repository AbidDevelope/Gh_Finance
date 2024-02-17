<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MiscellaneousItem;

class Miscellaneous extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal',
        'others',
        'grandtotal',
    ];

    public function miscellaneousItem()
    {
        return $this->hasMany(MiscellaneousItem::class);
    }
}
