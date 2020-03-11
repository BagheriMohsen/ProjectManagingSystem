<?php

namespace Modules\Message\Entities;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Sluggable;
    protected $fillable = [
        'sender_id',
        'reciver_id',
        'unit_id',
        'attach',
        'title',
        'slug',
        'body'
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
}
