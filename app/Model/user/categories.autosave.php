<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Model\user\post','category_posts')->orderby('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName(){

    	return 'slug';
    }
}
