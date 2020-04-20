<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillabe = [
       'name','slug' ,'body'
    ];  

    public function posts()
    {
        //Una categoria tiene a muchos post
      return $this->hasMany(Post::class);
    }
}
