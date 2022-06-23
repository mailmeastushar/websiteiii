@extends('front/master')

@section('container')

@if (Session::has('status'))
       <h1 style="color: green;text-align: center;">{!! session('status') !!}</h1>
@endif

@stop