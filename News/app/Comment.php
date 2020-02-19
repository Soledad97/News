<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['rating','content'];

    public function users(){
       return $this->belongsToMany('App\User','user_id');
}

    public function articles(){
        return $this->belongsToMany('App\Article', 'article_id');
}

}
