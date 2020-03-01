<?php

namespace Modules\TimeLine\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class TimeLine extends Model
{
    use Sluggable , \Spatie\Tags\HasTags;
    
    protected $fillable = [
        'user_id',
        'unit_id',
        'title',
        'slug',
        'desc',
        'image',
        'thumb',
        'is_confirm',
        'confirm_date'
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
    | Relate with \Spatie\Tags\HasTags
    |--------------------------------------------------------------------------
    */
    public function tags(): MorphToMany
    {
        return $this
            ->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
            ->orderBy('order_column');
    }
    /*
    |--------------------------------------------------------------------------
    | Relate with App\User
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->belongsTo("App\User");
    }



}
