<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'author', 'description', 'year', 'image'
    ];

    public function getImageAttribute()
    {
        return $this->profile_image;
    }
}
