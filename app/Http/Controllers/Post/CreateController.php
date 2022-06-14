<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Models\Category;
use App\Models\Tag;


class CreateController extends BaseController
{
    public function __invoke()
    {
      $categories = Category::all();
      $tags = Tag::all();
      return view('components.post.create', compact('categories', 'tags'));
    }
}
