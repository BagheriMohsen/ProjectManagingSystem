<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'unit_id',
        'last_name',
        'job_title',
        'avatar',
        'email',
        'password',
        'phone_number',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\User\Entities\Unit Model
    |--------------------------------------------------------------------------
    */
    public function unit() {
        return $this->belongsTo("Modules\User\Entities\Unit");
    }
    /*
    |--------------------------------------------------------------------------
    | relate with Modules\User\Entities\Group Model - Many To Many RelationsShip
    |--------------------------------------------------------------------------
    */
    public function users() {
        return $this->belongsToMany("Modules\User\Entities\Group");
    }
}
