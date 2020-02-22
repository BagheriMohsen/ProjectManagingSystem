<?php

namespace Modules\TimeLine\Entities;

use Illuminate\Database\Eloquent\Model;

class TimeLineComment extends Model
{
    protected $fillable = [
        'user_id',
        'time_line_id',
        'parent_id',
        'message'
    ];
}
