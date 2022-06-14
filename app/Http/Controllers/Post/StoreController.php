<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Post\BaseController;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
      $data = $request->validated();

      $this->service->store($post, $data);
      return redirect()->route('post.index');
    }
}
