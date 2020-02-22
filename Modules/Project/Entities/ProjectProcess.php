<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ProjectProcess extends Model
{
    use sluggable;
    
    protected $fillable = [
        'user_id',
        'project_id',
        'process_id',
        'operator_id',
        'title',
        'slug',
        'percent',
        'dead_line',
        'priority',
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
