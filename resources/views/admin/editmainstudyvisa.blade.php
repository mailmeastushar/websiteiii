@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@if (Session::has('message'))
       {!! session('message') !!}
@endif

@section('css')
    <link rel="stylesheet" href="{{ url('public/vendor/adminlte/dist/css/form.css') }}">
@stop

<h3>Edit Services</h3>

<div class="container">
  <form method="post" action="{{ url('editmainstudyvisa') }}" enctype="multipart/form-data">
  	{{ csrf_field() }}
  	<input type="hidden" name="id" value="{{ $data['id']}}">
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" value="{{ $data['name']}}" placeholder="Your Title.."><br>

    <label for="lname">image</label><br>
    <input type="file" name="image" id="image"><br>
    <img src="{{ asset('public/assets/images/'.$data['image']) }}" width="100">
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>
    <label for="lname">Details</label><br>
    <textarea class="description" name="description" rows="7">{{ $data['description'] }}</textarea><br><br>
    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>

@stop
