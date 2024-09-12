<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['title','content'];
    protected $fillable = ['title', 'slug', 'content', 'status', 'type'];
 public static $types=['Terms and Conditions','about'];
    public function meta()
    {
        return $this->morphOne(Meta::class, 'metaable');
    }

    function getRouteKeyName(){
        return 'slug';
    }
    
}
