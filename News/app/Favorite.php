<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [];

    public function users(){
        return $this->belongsToMany('App\User', 'user_id');
    } 
    public function articles(){
        return $this->belongToMany('App\Article','article_id');
    }
}
