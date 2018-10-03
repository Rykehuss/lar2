@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<h2 class="panel-heading">SIZES</h2>

					<div class="panel-body">
						{{ link_to_route('size.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}
						<table class="table table-bordered table-striped mt-3">
							<tr>
								<th>id</th>
								<th>Height</th>
								<th>Width</th>
								<th width="205px">Actions</th>
							</tr>
							{{--<tr>--}}
								{{--<td colspan="3" class="light-green-background no-padding" title="Create new template">--}}
									{{--<div class="row centered-child">--}}
										{{--<div class="col-md-12">--}}

										{{--</div>--}}
									{{--</div>--}}
								{{--</td>--}}
							{{--</tr>--}}
							@foreach ($sizes as $model)
								<tr>
									<td>{{$model->id}}</td>
									<td>{{$model->height}}</td>
									<td>{{$model->width}}</td>
									<td>
										{{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $model->id], 'method' => 'DELETE'])}}
										{{ link_to_route('size.show', 'Info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
										{{ link_to_route('size.edit', 'Edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
										{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
										{{Form::close()}}
									</td>

								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
