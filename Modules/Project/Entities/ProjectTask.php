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
        'status',
        'reminder_time',
        'reminder_type',
        'complete_date',
        'close_date'
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
    | relate with Modules\Project\Entities\Project
    |--------------------------------------------------------------------------
    */
    public function project() {
        return $this->belongsTo("Modules\Project\Entities\Project", "project_id");
    }

    /*
    |--------------------------------------------------------------------------
    | relate with App\User
    |--------------------------------------------------------------------------
    */
    public function operator() {
        return $this->belongsTo("App\User", "operator_id");
    }

}
