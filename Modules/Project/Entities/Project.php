<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Project extends Model
{
    use Sluggable;

    protected $fillable = [
        'user_id',
        'category_id',
        'operating_unit_id',
        'manager_id',
        'supervisor_id',
        'title',
        'slug',
        'applicant_unit',
        'priority',
        'req_date',
        'start_date',
        'complete_date',
        'close_date',
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
