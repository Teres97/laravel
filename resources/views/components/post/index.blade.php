@extends('components.main')
@section('content')
	@foreach($posts as $post)
		<h1><a href="{{ route('post.show', $post->id)}}">{{ $post->id }} {{ $post->title  }}</a></h1>
		<p>{{ $post->content  }}</p>
		<div>{{ $post->likes  }}</div>
	@endforeach
	<div class="mt-3">
		{{ $posts->links() }}
	</div>
@endsection
