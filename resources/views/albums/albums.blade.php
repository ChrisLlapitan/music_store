@extends('template')

@section('title', 'Albums')

@section('content')

<h1>This is the Albums page</h1>

<form method="POST" action="/albums/add" enctype="multipart/form-data">
	{{ CSRF_field() }}
	<div class="form-group">
		<label>Album Name:</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Year	:</label>
		<input type="number" name="year" id="year" class="form-control">
	</div>

	<div class="form-group">
		<label>Artist:</label>
		<select class="form-control" name="artist_id">
			<option value="">None</option>
			@foreach($artists as $artist)
			<option value="{{ $artist->id }}">{{ $artist->name }}</option>
			@endforeach
		</select>
		
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary form-control">Add</button>
	</div>
</form>


<div class="row justify-content-md-center">
	
	<div class="col col-lg-2"></div>

	<div class="col-md-auto">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Year</th>
					<th>Artist</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($albums as $album)
				<tr>
					<td>
						{{ $album->name }}
					</td>
					<td>
						{{$album->year}}
					</td>
					<td>
						@foreach($artists as $artist)
							@if($artist->id == $album->artist_id)
							{{ $artist->name }}
							@endif
						@endforeach

						{{ $album->artist->name }}
					</td>
					<td>

						<a href="/albums/{{ $album->id }}/edit" class="btn btn-primary">edit</a>

						<form class="d-inline" method="POST" action="/albums/{{ $album->id }}/delete">
							{{ csrf_field()}}
							{{ method_field('DELETE')}}
							<button type="submit" class="btn btn-danger">delete</button>
						</form>
						<a href="/albums/{{$album->id}}/song" class="btn btn-primary">add songs</a>


					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="col col-lg-2"></div>

</div>


@endsection

