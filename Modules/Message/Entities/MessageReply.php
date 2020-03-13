<?php

namespace Modules\Message\Entities;

use Illuminate\Database\Eloquent\Model;

class MessageReply extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        "message_id",
        'attach',
        'desc',
  
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Message\Entities\Message
    |--------------------------------------------------------------------------
    */
    public function message () {
        return $this->belongsTo("Modules\Message\Entities\Message");
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
