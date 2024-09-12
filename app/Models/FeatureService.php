<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureService extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['description'];
    protected $fillable = ['description', 'photo', 'feature_id','slug','lang'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    function feature(){
        return $this->belongsTo(Feature::class);
    }
}
