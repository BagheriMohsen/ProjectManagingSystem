<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProjectTask extends Model
{
    use Sluggable;

    protected $fillable = [
        'user_id',
        'project_id',
        'operator_id',
        'title',
        'slug',
        'percent',
        'estimated_time',
        'priority',
        'color',
        'desc',
        'status'
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
