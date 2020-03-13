<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Ticket extends Model
{

    use Sluggable;

    protected $fillable = [
        "user_id",
        "unit_id",
        "receiver_id",
        "project_id",
        "attach",
        "title",
        "slug",
        "priority",
        "is_close",
        "tracking_code",
        'desc'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function user () {
        return $this->belongsTo("App\User","user_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function receiver () {
        return $this->belongsTo("App\User","receiver_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Ticket\Entities\TicketReplies
    |--------------------------------------------------------------------------
    */
    public function replies () {
        return $this->hasMany("Modules\Ticket\Entities\TicketReplies");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function project () {
        return $this->belongsTo("Modules\Project\Entities\Project");
    }

}
