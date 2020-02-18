<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','excerpt','content'];

    public function categories(){
        return $this->belongsToMany('App\Category', 'product_category', 'product_id', 'category_id');
}

}
