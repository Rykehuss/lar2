@extends('layouts.panel')
<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Size $size */
?>
@section('panel')
	<div class="panel-heading">
		<div class="form-group">
			<a class="btn btn-info btn-xs" href="{{route('size.index')}}">Back</a>
			<h4>Size №{{$size->id}}</h4>
			<div>
				{{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $size->id], 'method' => 'DELETE'])}}
				{{ link_to_route('size.edit', 'Edit', [$size->id], ['class' => 'btn btn-primary btn-xs']) }}
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
			@foreach ($size->getAttributes() as $attribute => $value)
				<tr>
					<td>{{$attribute}}</td>
					<td>{{$value}}</td>
				</tr>
			@endforeach
		</table>
	</div>

@endsection
