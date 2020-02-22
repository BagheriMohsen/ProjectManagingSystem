<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectNote extends Model
{
    protected $fillable = [
        'user_id',
        'project_id',
        'title',
        'attach',
        'desc'
    ];
}
