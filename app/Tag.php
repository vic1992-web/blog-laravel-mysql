<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

  protected $guarded = [];

  public function posts()
  {
    //Una Etiqueta tiene y pertene a muchos post
    return $this->belongsToMany(Post::class);

    // return $this->belongsToMany(Post::class, 'post_tag', 'id' /* de roles */, 'id' /* de modules */);
  }
}
