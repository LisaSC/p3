@extends('_master')
@section('content')
	<form action='/lorem' method='POST'>
		Number of paragraphs:<input type='number' name='num_paragraphs' value='5' pattern=[0-9]{1,2}><br>
		<input type='submit' value='Generate text'>
	</form>
	<br>
	<br>
	
	<form action='/users' method='POST'>
		Number of users:<input type='number' name='num_users' value='5' pattern=[0-9]{1,2}><br>
		<input type='checkbox' name='add_birthday'>Include Birthday<br>
		<input type='submit' value='Generate users'>
	</form>

@stop