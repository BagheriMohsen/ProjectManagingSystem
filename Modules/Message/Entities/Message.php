<?php

namespace Modules\Message\Entities;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Sluggable;
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'unit_id',
        'attach',
        'title',
        'slug',
        'desc',
        "is_unread"
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
    | relate with Modules\Message\Entities\Message
    |--------------------------------------------------------------------------
    */
    public function replies () {
        return $this->hasMany("Modules\Message\Entities\MessageReply");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function sender () {
        return $this->belongsTo("App\User","sender_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function receiver () {
        return $this->belongsTo("App\User","receiver_id");
    }
}
