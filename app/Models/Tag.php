<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['title'];
    protected $fillable = [
        'title',
        'slug',
        'status',
        'is_featured',
    ];

    function getRouteKeyName(){
        return 'slug';
    }
    function blogs(){
    return $this->morphedByMany(Blog::class,'taggable');
    }

}
