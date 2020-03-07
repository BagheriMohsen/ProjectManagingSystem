<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectAction extends Model
{
    protected $fillable = [
        "user_id",
        "project_id",
        'desc',
        'attach'
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function project() {
        return $this->belongsTo("Modules\Project\Entities\Project", "project_id");
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
