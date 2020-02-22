<?php

namespace Modules\TimeLine\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class TimeLine extends Model
{
    use Sluggable;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'desc',
        'tags',
        'exception',
        'images'
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
