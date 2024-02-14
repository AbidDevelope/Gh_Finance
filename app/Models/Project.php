<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\ProjectManager;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_type',
        'project_manager',
        'project_name',
        'project_location',
        'project_value',
        'email',
        'mobile',
        'office_landline',
        'office_location',
        'remarks',
        'company_name',
        'company_location',
        'description',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function projectManager()
    {
        return $this->belongsTo(ProjectManager::class, 'project_manager_id');
    }
}
