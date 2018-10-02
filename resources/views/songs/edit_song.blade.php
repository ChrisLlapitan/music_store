@extends('template')

@section('title', 'Songs')

@section('content')

<h1>This is the Song page</h1>

<div class="row justify-content-md-center">
	<div class="col col-lg-2">
	</div>
	<div class="col-md-auto">
		<form method="POST" action="" enctype="multipart/form-data">
			{{ CSRF_field() }}
			{{ method_field('PATCH') }}
			<div class="form-group">
				<label>Song title:</label>
				<input type="text" name="title" id="title" class="form-control" value="{{ $song->title }}">
			</div>

			<div class="form-group">
				<label>Length:</label>
				<input type="number" name="length" id="length" class="form-control" value="{{ $song->length }}">
			</div>

			<div class="form-group">
				<label>Genre:</label>
				<input type="text" name="genre" id="genre" class="form-control" value="{{ $song->genre }}">
			</div>

			<div class="form-group">
				<label>Album:</label>
				<select name="album_id" class="form-control">
					<option>None</option>
					@foreach($albums as $album)
						@if($album->id == $song->album_id)
						<option value="{{ $album->id }}" selected>{{ $album->name }}</option>
						@else
						<option value="{{ $album->id }}">{{ $album->name }}</option>
						@endif
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary form-control">Save</button>
			</div>
		</form>
	</div>
	<div class="col col-lg-2">
	</div>
</div>
@endsection