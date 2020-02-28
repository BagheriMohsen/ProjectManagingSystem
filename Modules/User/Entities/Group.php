<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        "user_id",
        "name"
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with App\User Model - Many To Many RelationsShip
    |--------------------------------------------------------------------------
    */
    public function users() {
        return $this->belongsToMany("App\User");
    }
}
