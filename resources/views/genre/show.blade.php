@extends('layouts.panel')
<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Genre $genre */
?>
@section('panel')
	<div class="panel-heading">
		<div class="form-group">
			<a class="btn btn-info btn-xs" href="{{route('genre.index')}}">Back</a>
			<h4>Genre: {{$genre->name}}</h4>
			<div>
				{{Form::open(['class' => 'confirm-delete', 'route' => ['genre.destroy', $genre->id], 'method' => 'DELETE'])}}
				{{ link_to_route('genre.edit', 'Edit', [$genre->id], ['class' => 'btn btn-primary btn-xs']) }}
				{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
				{{Form::close()}}
			</div>
		</div>
	</div>

	<div class="panel-body">
		<table class="table table-bordered">
			<tr>
				<th width="25%">Attribute</th>
				<th width="75%">Value</th>
			</tr>
			@foreach ($genre->getAttributes() as $attribute => $value)
				<tr>
					<td>{{$attribute}}</td>
					<td>{{$value}}</td>
				</tr>
			@endforeach
		</table>
	</div>

@endsection
