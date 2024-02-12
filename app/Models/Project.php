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
        'type',
        'name',
        'project_manager_id',
        'description',
        'start_date',
        'end_date',
        'budget',
        'location',
        'status',
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
