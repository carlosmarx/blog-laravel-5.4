<?php

namespace App\Repositories;

use App\Post;

class PostsRepository
{
  public function index()
  {
     return Post::latest()
      ->filter(request(['month', 'year']))
      ->get();
  }
}