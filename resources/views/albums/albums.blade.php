@extends('template')

@section('title', 'Albums')

@section('content')

<h1>This is the Albums page</h1>

<form method="POST" action="" enctype="multipart/form-data">
	{{ CSRF_field() }}
	<div class="form-group">
		<label>Album Name:</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Album Name:</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>


@endsection

