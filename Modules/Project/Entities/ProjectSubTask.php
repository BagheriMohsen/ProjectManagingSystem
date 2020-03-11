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
        'time_passes',
        'priority',
        'color',
        'desc',
        'status',
        'reminder_time',
        'reminder_type',
        'is_done'
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\ProjectTask
    |--------------------------------------------------------------------------
    */
    public function task() {
        return $this->belongsTo("Modules\Project\Entities\ProjectTask", "project_task_id");
    }
}
