<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectSubTask extends Model
{
    protected $fillable = [
        'user_id',
        'project_task_id',
        'title',
        'percent',
        'estimated_time',
        'priority',
        'color',
        'desc',
        'status',
        'reminder_time',
        'reminder_type'
    ];
}
