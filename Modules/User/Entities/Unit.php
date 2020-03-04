<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        "user_id",
        "name"
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with App\User Model
    |--------------------------------------------------------------------------
    */
    public function users() {
        return $this->hasMany("App\User");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function operating_projects() {
        return $this->hasMany("Modules\Project\Entities\Project", "id", "operating_unit_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function applicant_projects() {
        return $this->hasMany("Modules\Project\Entities\Project", "id", "applicant_unit_id");
    }

}
