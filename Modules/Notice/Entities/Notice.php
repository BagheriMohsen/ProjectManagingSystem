<?php

namespace Modules\Notice\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Notice extends Model
{
    use Sluggable;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
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
