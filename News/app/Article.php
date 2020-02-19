<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','excerpt','content'];

    public function categories(){
        return $this->belongsTo('App\Category', 'category_id');
}
    public function users(){
        return $this->belongsToMany('App\User', 'Favorite', 'Visit', 'Comment', 'user_id');
}
    public function photos(){
        return $this->hasMany('App\Photo');
}

}
