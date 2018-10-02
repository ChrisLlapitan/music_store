@extends('template')

@section('title', 'Artists')

@section('content')

<h1>This is the Artist page</h1>

<div class="row justify-content-md-center">
<div class="col col-lg-2">
</div>
<div class="col-md-auto">
	<form action="/artists/{{ $artist->id }}/edit" method="POST">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		
		<div class="form-group">
		<input type="text" class="form-control" name="name" value="{{ $artist->name }}">
		</div>

		<div class="form-group">
		<input type="file" class="form-control" name="image" value="{{ $artist->image }}">
		</div>

		<button class="btn btn-primary">Save</button>
	</form>
</div>
<div class="col col-lg-2">
</div>
</div>
@endsection