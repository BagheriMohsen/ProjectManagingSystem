<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectTaskAction extends Model
{
    protected $fillable = [
        "user_id",
        "project_task_id",
        'desc',
        'attach'
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\ProjectTask
    |--------------------------------------------------------------------------
    */
    public function project() {
        return $this->belongsTo("Modules\Project\Entities\ProjectTask", "project_task_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->belongsTo("App\User");
    }
}
