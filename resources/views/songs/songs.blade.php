@extends('template')

@section('title', 'Songs')

@section('content')

<h1>This is the Songs page</h1>

<form method="POST" action="/songs/create" enctype="multipart/form-data">
	{{ CSRF_field() }}
	<div class="form-group">
		<label>Song title:</label>
		<input type="text" name="title" id="title" class="form-control">
	</div>

	<div class="form-group">
		<label>Length:</label>
		<input type="number" name="length" id="length" class="form-control">
	</div>

	<div class="form-group">
		<label>Genre:</label>
		<input type="text" name="genre" id="genre" class="form-control">
	</div>

	<div class="form-group">
		<label>Album name:</label>
		<input type="text" name="album_name" id="album_name" class="form-control" value="{{ $album->name }}" disabled>

		<input type="text" name="album_id" id="album_id" class="form-control" value="{{ $album->id }}" hidden>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>

@endsection

