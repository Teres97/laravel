@extends('components.main')
@section('content')
<div>
	<form action="{{ route('post.update', $post->id) }}" method="post">
		@csrf
		@method('patch')
	  <div class="form-group">
	    <label for="title">Title Post</label>
	    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ $post->title }}">
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" name="content" class="form-control" id="content" placeholder="Enter content" value="{{ $post->content }}">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="text" name="image" class="form-control" id="image" placeholder="Enter image" value="{{ $post->image }}">
		</div>
		<div class="form-group">
	    <label for="category">Category</label>
	    <select class="form-control" id="category" name="category_id">
				@foreach($categories as $category)
	      <option
					{{ $category->id == $post->category->id ? ' selected' : ''}}
					value="{{ $category->id }}">{{ $category->title }}</option>
				@endforeach
	    </select>
			<div class="form-group">
				<label for="tags">Tags</label>
				<select multiple class="form-control" id="tags" name="tags[]">
					@foreach($tags as $tag)
		      <option
					@foreach($post->tags as $postTag)
					@endforeach
					{{ $category->id == $postTag->id ? ' selected' : ''}}
					value="{{ $tag->id }}">{{ $tag->title }}</option>
					@endforeach
				</select>
			</div>
  	</div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
@endsection
