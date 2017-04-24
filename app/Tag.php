<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  
  /**
  Call method to reference tag
    $post = Post::find(3);
    $tag = Tag::first();
  $post->tags()->attach($tag);
  **/

    public function posts()
    {
      return $this->belongsToMany(Post::class);
    }
}
