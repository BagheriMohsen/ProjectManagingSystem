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

    /*
    |--------------------------------------------------------------------------
    | Relate with Modules\TimeLine\Entities\TimeLine
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->hasMany("Modules\TimeLine\Entities\TimeLine");
    }

    /*
    |--------------------------------------------------------------------------
    | Relate with Modules\TimeLine\Entities\TimeLineComment
    |--------------------------------------------------------------------------
    */
    public function timeline_comments() {
        return $this->hasMany("Modules\TimeLine\Entities\TimeLineComment");
    }

    /*
    |--------------------------------------------------------------------------
    | Relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function manager_projects() {
        return $this->hasMany("Modules\Project\Entities\Project", "manager_id");
    }

    /*
    |--------------------------------------------------------------------------
    | Relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function supervisor_projects() {
        return $this->hasMany("Modules\Project\Entities\Project", "supervisor_id");
    }

    /*
    |--------------------------------------------------------------------------
    | Relate with Modules\Project\Entities\ProjectTask
    |--------------------------------------------------------------------------
    */
    public function operator_tasks() {
        return $this->hasMany("Modules\Project\Entities\ProjectTask", "operator_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\ProjectAction
    |--------------------------------------------------------------------------
    */
    public function project_action() {
        return $this->hasMany("Modules\Project\Entities\ProjectAction");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\ProjectTaskAction
    |--------------------------------------------------------------------------
    */
    public function task_action() {
        return $this->hasMany("Modules\Project\Entities\ProjectTaskAction");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Ticket\Entities\Ticket
    |--------------------------------------------------------------------------
    */
    public function ticket_receivers () {
        return $this->hasMany("Modules\Ticket\Entities\Ticket","receiver_id");
    }


}
