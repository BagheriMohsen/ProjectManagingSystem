<?php

namespace Modules\TimeLine\Entities;

use Illuminate\Database\Eloquent\Model;

class TimeLineComment extends Model
{
    protected $fillable = [
        'user_id',
        'time_line_id',
        'parent_id',
        'message',
        'is_confirm',
        'confirm_date'
    ];

    /*
    |--------------------------------------------------------------------------
    | Relate with App\User
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->belongsTo("App\User");
    }

    
}
