<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureInstruction extends Model
{
   
    use HasFactory,HasTranslations;
    public $translatable = ['instruction'];
    protected $fillable = ["instruction", 'photo', 'feature_id','slug'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    function feature(){
        return $this->belongsTo(Feature::class);
    }
}
