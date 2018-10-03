@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
	<div class="panel-heading container-fluid">
		<div class="form-group">
			<div class="centered-child col-md-12"><b>New book</b></div>
		</div>
	</div>

	<div class="panel-body">
		{!! Form::open(['route' => 'book.store']) !!}

		@include('book._form')

		<div class="form-group">
			{!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
