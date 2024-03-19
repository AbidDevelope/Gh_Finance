<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseItem;
use App\Models\Project;
use App\Models\Rent;
use App\Models\Miscellaneous;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'expense_type_id',
        'expense_type',
        'grandtotal',
        ];

    public function expenseItem()
    {
        return $this->hasMany(ExpenseItem::class, 'expenses_id');
    }    

    public function project()
    {
       return $this->belongsTo(Project::class);
    }

    public function miscellaneous()
    {
        return $this->belongsTo(Miscellaneous::class);
    }

    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }
}
