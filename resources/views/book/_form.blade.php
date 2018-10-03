<div class="form-group">
	{!!Form::label('title', 'Title') !!}
	{!!Form::text('title', null, ['class' => 'form-control']) !!}

	{!!Form::label('author', 'Author') !!}
	{!!Form::text('author', null, ['class' => 'form-control']) !!}

	{!!Form::label('price', 'Price') !!}
	{!!Form::text('price', null, ['class' => 'form-control']) !!}

	{!!Form::label('publisher', 'Publisher') !!}
	{!!Form::text('publisher', null, ['class' => 'form-control']) !!}

	{!!Form::label('pages', 'Pages') !!}
	{!!Form::text('pages', null, ['class' => 'form-control']) !!}

	{!!Form::label('year', 'Year') !!}
	{!!Form::text('year', null, ['class' => 'form-control']) !!}

	{!!Form::label('size_id', 'Size') !!}
	{!!Form::text('size_id', null, ['class' => 'form-control']) !!}

	<!-- Width & Height when we make connection between tables -->
	{{--{!!Form::label('height', 'Height') !!}--}}
	{{--{!!Form::text('height', null, ['class' => 'form-control']) !!}--}}
	{{----}}
	{{--{!!Form::label('width', 'Width') !!}--}}
	{{--{!!Form::text('width', null, ['class' => 'form-control']) !!}--}}
</div>
<div class="form-check">
	{!!Form::hidden('hardcover', '0') !!}
	{!!Form::checkbox('hardcover', '1', false, ['class' => 'form-check-input']) !!}
	{!!Form::label('hardcover', 'Hardcover', ['class' => 'form-check-label']) !!}
</div>
