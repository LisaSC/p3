@extends('_master')
@section('sub_header')
Users:
@stop
@section('content')
{{ $users or '' }} 
@stop