<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillabe = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt',
        'body', 'status', 'file'
    ];
    public function user()
    {
        //Un post pertene a un usuario
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        //Un post pertene a una categoria
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        //Un Post tiene y pertene a muchas etiquetas
      return $this->belongsToMany(Tag::class);
    }



}
