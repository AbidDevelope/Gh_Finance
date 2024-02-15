<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class ProjectManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'mobile', 'gender', 'address', 'status'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_manager_id');
    }
}
