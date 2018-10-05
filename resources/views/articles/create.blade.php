@extends('layouts.app')

@section('content')
	<h1>Create Article</h1>
	{!! Form::open(['action' => 'ArticleController@store', 'method' => 'POST']) !!}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}	
			{{ Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Enter Title']) }}
		</div>		
		<div class="form-group">
			{{ Form::label('body', 'Body') }}	
			{{ Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Enter body']) }}
		</div>
		{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection