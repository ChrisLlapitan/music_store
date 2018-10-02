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
		<label>Image:</label>
		<input type="file" name="image" id="image" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>

<div class="row">

	@foreach($artists as $artist)

	<div class="card-container col-4" style="width: 18rem;">
		<img class="card-img-top" src="{{ $artist->image }}" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title"><a href="/artists/{{ $artist->id }}/edit">{{ $artist->name }}</a></h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<form method="POST" action="/artists/{{ $artist->id }}/delete">
				{{ CSRF_field() }}	
				{{ method_field('DELETE') }}
				<button class="btn btn-danger">delete</button>
			</form>
		</div>
	</div>
	@endforeach

</div>
@endsection