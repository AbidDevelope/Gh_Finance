<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseItem;
use App\Models\Project;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'project_id',
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
}
