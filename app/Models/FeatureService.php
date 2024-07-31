<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureService extends Model
{
    use HasFactory;
   
    protected $fillable = ['description', 'photo', 'post_id','slug','lang'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    function post(){
        return $this->belongsTo(Post::class);
    }
}
