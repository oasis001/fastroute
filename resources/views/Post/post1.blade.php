@extends('layout/master')


@section('content')


	@if(count($posts) > 0)

	@foreach($posts as $post)

		<div class="card card-body bg-light">
		<h3><a href="#">{{$post->title}}</a></h3>
		<small>Written on{{$post->created_at}}</small>
		</div>
	@endforeach
	@endif

@endsection