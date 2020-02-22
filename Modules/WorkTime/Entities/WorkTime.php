<?php

namespace Modules\WorkTime\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'start',
        'end',
        'activity_type'
    ];

    protected $casts = [
        'start' => 'date:hh:mm',
        'end'   => 'date:hh:mm'
    ];
}
