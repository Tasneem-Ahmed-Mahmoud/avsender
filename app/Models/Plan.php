<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Plan extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['title', 'description','business_size'];

    protected $guarded = [];
        
    protected $casts = [
        'data' => 'array',
        'limits' => 'array',
    ];
    public function activeuser()
    {
        return $this->hasMany('App\Models\User');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }



}
