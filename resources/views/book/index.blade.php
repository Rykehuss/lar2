@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">BOOKS</div>

					<div class="panel-body">
						{{ link_to_route('book.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}
						<table class="table table-bordered table-striped mt-3">
							<tr>
								<th>id</th>
								<th>Title</th>
								<th>Author</th>
								<th>Price</th>
								<th>Publisher</th>
								<th>Year</th>
								<th>Pages</th>
								<th>Hardcover</th>
								<th>Size_ID</th>
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
							@foreach ($books as $model)
								<tr>
									<td>{{$model->id}}</td>
									<td>{{$model->title}}</td>
									<td>{{$model->author}}</td>
									<td>{{$model->price}}</td>
									<td>{{$model->publisher}}</td>
									<td>{{$model->year}}</td>
									<td>{{$model->pages}}</td>
									<td>{{$model->hardcover ? "true" : "false"}}</td>
									<td>{{$model->size->height."x".$model->size->width}}</td>
									<td>
										{{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $model->id], 'method' => 'DELETE'])}}
										{{ link_to_route('book.show', 'Info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
										{{ link_to_route('book.edit', 'Edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
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
