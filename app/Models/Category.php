<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
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

    // public function postcategory()
    // {
    //     return $this->belongsTo(Postcategory::class);
    // }

    // public function postcategories()
    // {
    //     return $this->hasMany(Postcategory::class);
    // }

    // public function posts()
    // {
    //     return $this->belongsToMany('App\Models\Post', 'postcategories', 'post_id', 'category_id');
    // }

    function blogs(){
        return $this->morphedByMany(Blog::class,'categorizable');
    }


}
