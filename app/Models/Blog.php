<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['title', 'description','content'];
    protected $fillable = ['title', 'slug', 'photo', 'description', 'content', 'publish', 'featured'];

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metaable');
    }

    function getRouteKeyName(){
        return 'slug';
    }
    public function categories() {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    
    
    function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
