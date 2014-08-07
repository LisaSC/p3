@extends('_master')
@section('sub_header')
Random users:
@section('content')
{{ $users or '' }} 
@stop