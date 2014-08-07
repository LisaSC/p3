@extends('_master')
@section('sub_header')
Lorem Ipsum Text:
@stop
@section('content')
{{ $lorem or '' }} 
@stop