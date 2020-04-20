<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{  
           
    protected $guarded = [];
 
     public function posts()
     {
         //Una categoria tiene y pertene a muchos post
       return $this->belongsToMany(Post::class);
     }
}
