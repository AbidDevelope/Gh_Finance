<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'project',
        'purchase_from',
        'purchase_date',
        'purchase_by',
        'amount',
        'paid_by',
        'attachments',
        'description',
        'status',
        ];
}
