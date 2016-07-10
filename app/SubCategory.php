<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'title_az', 'title_en', 'title_ru','visibility','category_id'
    ];
    public function maincategory(){
    	return $this->belongsTo('App\Category');
    }
}
