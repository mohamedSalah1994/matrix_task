<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkForce extends Model
{
    use HasFactory;
    protected $table = 'work_forces';
    // protected $fillable = ['name', 'work_id', 'email', 'password', 'department_id',
    //     'position_id', 'project_id'];
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);

    }

    public function position()
    {
        return $this->belongsTo(Position::class);

    }

    public function project()
    {
        return $this->belongsTo(Project::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
