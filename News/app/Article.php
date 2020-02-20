<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','excerpt','content'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function photos(){
        return $this->hasMany('App\Photo');
    }
    public function visits(){
        return $this->belongsToMany('App\User', 'visits');
    }
    public function favorites(){
        return $this->belongsToMany('App\User', 'favorites');
    }
    public function comments(){
        return $this->belongsToMany('App\User', 'comments')->withPivot('rating', 'content');
    }
}
