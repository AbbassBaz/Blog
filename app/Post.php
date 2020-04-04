<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    function user(){

        return $this->belongsTo('App\User');
    }


    function comment(){

        return $this->hasMany('App\Comment');
    }
     function like(){

        return $this->hasMany('App\Like');

     }

    function post(){

        return $this->belongsTo('App\Category');
    }



}
