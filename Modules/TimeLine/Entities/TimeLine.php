<?php

namespace Modules\TimeLine\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class TimeLine extends Model
{
    use Sluggable , \Spatie\Tags\HasTags, HasMediaTrait;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'desc',
        'image'
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


    public function tags(): MorphToMany
    {
        return $this
            ->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
            ->orderBy('order_column');
    }


      /*
    |--------------------------------------------------------------------------
    | Conversion image with Media Model
    |--------------------------------------------------------------------------
    */
    public function registerMediaCollections()
    {
        
        
        //Card image for Product
        $this->addMediaConversion('card')
            ->width(310)
            ->height(194);
    }
    /*
    |--------------------------------------------------------------------------
    | Relate with Media Model
    |--------------------------------------------------------------------------
    */
    public function timeLineImage(){
        return $this->hasOne(Media::class,'id','image_id');
    }
    /*
    |--------------------------------------------------------------------------
    | Call Card url in view page
    |--------------------------------------------------------------------------
    */
    public function getCardUrlAttribute(){
        return $this->timeLineImage->getUrl('card');
    }
   


}
