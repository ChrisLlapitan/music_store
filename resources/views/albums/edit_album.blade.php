@extends('template')

@section('title', 'Albums')

@section('content')

<h1>This is the Albums page</h1>

<form method="POST" action="/albums/{{ $album->id }}/edit" enctype="multipart/form-data">
	{{ CSRF_field() }}
	{{ method_field('PATCH') }}
	<div class="form-group">
		<label>Album Name:</label>
		<input type="text" name="name" id="name" class="form-control" value="{{ $album->name }}">
	</div>

	<div class="form-group">
		<label>Year	:</label>
		<input type="number" name="year" id="year" class="form-control" value="{{ $album->year }}">
	</div>

	<div class="form-group">
		<label>Artist:</label>
		<select class="form-control" name="artist_id">
			<option value="">None</option>
			@foreach($artists as $artist)
			@if($artist->id == $album->artist_id)
			<option value="{{ $artist->id }}" selected>{{ $artist->name }}</option>
			@else
			<option value="{{$artist->id}}">{{$artist->name}}</option>
			@endif
			@endforeach
		</select>
		
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>

@endsection

