<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
      $data = $request->validated();

      $this->service->update($data);
      return redirect()->route('post.show', $post->id);
    }
}
