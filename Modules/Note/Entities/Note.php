<?php

namespace Modules\Note\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Note extends Model
{

    use Sluggable;

    protected $fillable = [
        "user_id",
        "title",
        "slug",
        "desc"
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
