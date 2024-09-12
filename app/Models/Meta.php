<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
   protected $fillable = ['keywords','description','title' ,'tags','image', 'metaable_id', 'metaable_type'];
   
   public function metaable()
   {
       return $this->morphTo();
   }

}
