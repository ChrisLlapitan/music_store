@extends('template')

@section('title', 'Songs')

@section('content')

<h1>This is the Song page</h1>

<table class="table">
	<thead>
		<tr>
			<th>title</th>
			<th>length</th>
			<th>genre</th>
			<th>album</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($songs as $song)
		<tr>
			<td>
				{{ $song->title }}
			</td>

			<td>
				{{ $song->length }}
			</td>

			<td>
				{{ $song->genre }}
			</td>
			
			<td>
				@foreach($albums as $album)
				@if($album->id == $song->album_id)
				{{ $album->name }}
				@endif
				@endforeach				
			</td>

			<td>
				<a href="/songs/{{ $song->id }}/edit" class="btn btn-primary">edit</a>
				<form class="d-inline" method="POST" action="/songs/{{ $song->id }}/delete">
					{{ CSRF_field() }}
					{{ method_field('DELETE') }}
					<button class="btn btn-danger">delete</button>
				</form>
			</td>
		</tr>

		@endforeach

	</tbody>
</table>


@endsection