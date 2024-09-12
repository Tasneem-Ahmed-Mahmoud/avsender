<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['title', 'description','content'];
    protected $fillable = [
        'title',
        'slug',
        'photo',
        'description',
        'content',
        'status',
        'featured',
        'banner'
    ];

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metaable');
    }

    function getRouteKeyName(){
        return 'slug';
    }


    public function featureServices()
    {
        return $this->hasMany(FeatureService::class);
    }
    
    public function featureInstructions()
    {
        return $this->hasMany(FeatureInstruction::class);

    }


}
