@extends('_master')
@section('content')
	{{ Form::open(array('url'=>'lorem', 'method'=>'POST')) }} 
		Number of paragraphs:<br>
		{{ Form::text('num_paragraphs', '5', array('size'=>1, 'pattern'=>'[1-9]{1}')) }} 
		(1-9)<br>
		{{ Form::submit('Generate text') }} 
	{{ Form::close() }} 
	<br><br>
	
	{{ Form::open(array('url'=>'users', 'method'=>'POST')) }} 
		Number of users:<br>
		{{ Form::text('num_users', '5', array('size'=>1, 'pattern'=>'[0-9]{1,2}')) }} 
		(1-99)<br>
		{{ Form::checkbox('add_birthday', true) }}
		Include Birthday<br>
		{{ Form::submit('Generate users') }} 
	{{ Form::close() }} 

@stop
