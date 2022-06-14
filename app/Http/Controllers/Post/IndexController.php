<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
      $data = $request->validated();

      $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

      $posts = Post::filter($filter)->paginate(10);

      return view('components.post.index', compact('posts'));
    }
}
