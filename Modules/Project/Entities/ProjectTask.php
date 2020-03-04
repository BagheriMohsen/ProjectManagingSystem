<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    protected $fillable = [
        'user_id',
        'project_id',
        'process_id',
        'operator_id',
        'title',
        'slug',
        'percent',
        'dead_line',
        'priority',
        'desc',
        'status'
    ];
}
