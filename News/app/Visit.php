<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable=['user_id', 'article_id'];

    protected $table='visits';
    
}
