@extends('components.main')
@section('content')
<div>
	<form action="{{ route('post.store') }}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="title">Title Post</label>
	    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ old('title') }}">
			@error('title')
			<p class="alert alert-danger">{{ $message }}</p>
			@enderror
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" name="content" class="form-control" id="content" placeholder="Enter content" value="{{ old('content') }}">
			@error('content')
			<p class="alert alert-danger">{{ $message }}</p>
			@enderror
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="text" name="image" class="form-control" id="image" placeholder="Enter image" value="{{ old('image') }}">
			@error('image')
			<p class="alert alert-danger">{{ $message }}</p>
			@enderror
		</div>
		<div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
			@foreach($categories as $category)
      <option
			{{ old('category_id') == $category->id ? 'selected' : '' }}
			value="{{ $category->id }}">{{ $category->title }}</option>
			@endforeach
    </select>
	<div class="form-group">
		<label for="tags">Tags</label>
		<select multiple class="form-control" id="tags" name="tags[]">
			@foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->title }}</option>
			@endforeach
		</select>
	</div>
  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
</div>
@endsection
