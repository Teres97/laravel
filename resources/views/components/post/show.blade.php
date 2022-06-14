@extends('components.main')
@section('content')
<div>
	<h1>{{ $post->id }} . {{ $post->title  }}</h1>
	<p>{{ $post->content }}</p>
	<div><a href="{{ route('post.edit', $post->id) }}">Edit</a></div>
	<form action="{{ route('post.delete', $post->id) }}" method="post">
		@csrf
		@method('delete')
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
	<div><a href="{{ route('post.index') }}">Back</a></div>
</div>
@endsection
