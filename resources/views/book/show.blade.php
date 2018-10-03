@extends('layouts.panel')
<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Book $book */
?>
@section('panel')
	<div class="panel-heading">
		<div class="form-group">
			<a class="btn btn-info btn-xs" href="{{route('book.index')}}">Back</a>
			<h4>Book: {{$book->title}}</h4>
			<div>
				{{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
				{{ link_to_route('book.edit', 'Edit', [$book->id], ['class' => 'btn btn-primary btn-xs']) }}
				{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
				{{Form::close()}}
			</div>
		</div>
	</div>

	<div class="panel-body">
		<table class="table table-bordered table-responsive">
			<tr>
				<th width="25%">Attribute</th>
				<th width="75%">Value</th>
			</tr>
			@foreach ($book->getAttributes() as $attribute => $value)
				<tr>
					<td>{{$attribute}}</td>
					<td>{{$value}}</td>
				</tr>
			@endforeach
		</table>
		<div>
			{{$book->genres->implode('name',' ')}}
		</div>

	</div>

@endsection
