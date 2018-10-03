@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
	<div class="panel-heading">
		<a class="btn btn-info btn-xs" href="{{route('book.index')}}">Back</a>
		<h4>Edit book: {{$book->title}}</h4>
		{{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
		{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
		{{Form::close()}}
	</div>

	<div class="panel-body mt-3">
		{!! Form::model($book, ['route' => ['book.update', $book->id], 'method' => 'PUT']) !!}

		@include('book._form')

		<div class="form-group">
			{!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

	{{--@include('layouts.errors')--}}

@endsection
