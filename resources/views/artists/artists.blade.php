@extends('template')

@section('title', 'Artists')

@section('content')

<h1>This is the Artist page</h1>

<form method="POST" action="/artists/create" enctype="multipart/form-data">
	{{ CSRF_field() }}
	<div class="form-group">
		<label>Artist Name:</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>

<ul>
	@foreach($artists as $artist)
	<li> 
		<a href="/artists/{{ $artist->id }}/edit">{{ $artist->name }}</a>

		<form method="POST" action="/artists/{{ $artist->id }}/delete">
			{{ CSRF_field() }}
			{{ method_field('DELETE') }}
			<button class="btn btn-danger">delete</button>
		</form>

	</li> 	

	@endforeach
</ul>

@endsection