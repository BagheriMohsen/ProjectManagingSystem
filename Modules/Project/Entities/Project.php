<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use Sluggable;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'subject',
        'operating_unit_id',
        'applicant_unit_id',
        'manager_id',
        'supervisor_id',
        'priority',
        'req_date',
        'start_date',
        'dead_date',
        'complete_date',
        'close_date',
        'desc',
        'color',
        'status',
        'is_public',
        'is_verify',
        'verify_date'
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
    | relate with Modules\User\Entities\Unit
    |--------------------------------------------------------------------------
    */
    public function Operating_unit() {
        return $this->belongsTo("Modules\User\Entities\Unit", "operating_unit_id", "id");
    }


    /*
    |--------------------------------------------------------------------------
    | relate with Modules\User\Entities\Unit
    |--------------------------------------------------------------------------
    */
    public function applicant_unit() {
        return $this->belongsTo("Modules\User\Entities\Unit", "applicant_unit_id", "id");
    }


}
