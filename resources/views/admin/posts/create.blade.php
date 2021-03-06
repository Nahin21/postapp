@extends('layouts.admin')



@section('content')


<h1><b>Create Posts</b></h1>

<div class="row">

	<div class="row">

	{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=> true]) !!}

			<div class="form-group">

				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class'=>'form-control']) !!}	
			</div>

			<div class="form-group">

				{!! Form::label('category_id', 'Category') !!}
				{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}	
			</div>

			<div class="form-group">
				{!! Form::label('photo_id', 'Photo') !!}
				{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}	
			</div>

			<div class="form-group">
				{!! Form::label('body', 'Caption') !!}
				{!! Form::textarea('body', null,  ['class'=>'form-control']) !!}	
			</div>

			<div class="form-group">
		
				{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}	
			</div>

	</div>

	{!! Form::close() !!}

</div>	

	<div class="row">
	
		@include('includes.form_error')	

	</div>


@stop