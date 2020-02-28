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

}
