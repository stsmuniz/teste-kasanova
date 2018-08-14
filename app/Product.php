<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'value', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
