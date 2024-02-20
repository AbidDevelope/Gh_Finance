<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\ProjectManager;
use App\Models\Expense;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_type',
        'date',
        'project_manager',
        'manager_email',
        'Manager_mobile',
        'Manager_landline',
        'manager_remarks',
        'company_name',
        'company_project_name',
        'company_email',
        'company_mobile',
        'company_landline',
        'company_location',
        'company_country',
        'company_website',
        'company_remarks',
        'project_name',
        'company_project',
        'project_email',
        'project_mobile',
        'project_location',
        'project_value',
        'project_country',
        'project_remarks',
        'project_description',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function projectManager()
    {
        return $this->belongsTo(ProjectManager::class, 'project_manager_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
