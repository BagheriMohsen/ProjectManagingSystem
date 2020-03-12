<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketReplies extends Model
{

    protected $fillable = [
        "user_id",
        "ticket_id",
        "receiver_id",
        "attach",
        "title",
        'desc'
    ];

    /*
    |--------------------------------------------------------------------------
    | relate with Modules\Ticket\Entities\Ticket
    |--------------------------------------------------------------------------
    */
    public function ticket () {
        $this->belongsTo("Modules\Ticket\Entities\Ticket");
    }
}
