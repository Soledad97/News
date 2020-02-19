<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=['file_path'];

    public function articles(){
        return $this->belongsToMany('App\Article', 'article_id');
    }
    
}
