<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
        'title_az', 'title_en', 'title_ru','visibility'
    ];
    function news()
    {
    	return $this->hasMany('App\News');
    }
    function subcategories()
    {
    	return $this->hasMany('App\SubCategory');
    }
}
