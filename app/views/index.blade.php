@extends('_master')
@section('content')
	{{ Form::open(array('url'=>'lorem', 'method'=>'POST')) }} 
		{{ Form::text('num_paragraphs', '5', array('pattern'=>'[1-9]{1}')) }} 
		{{ Form::submit() }} 
	{{Form::close()}} 
	<br><br>
	
	{{ Form::open(array('url'=>'users', 'method'=>'POST')) }} 
		{{ Form::text('num_users', '5', array('pattern'=>'[0-9]{1,2}')) }} 
		<br>
		
		{{ Form::submit() }} 
	{{ Form::close() }} 

@stop
