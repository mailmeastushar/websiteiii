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

<h3>Add Slider</h3>

<div class="container">
  <form method="post" action="{{ url('insertslider') }}" enctype="multipart/form-data"> 
  	{{ csrf_field() }}
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" placeholder="Your Title.."><br>

    <label for="lname">image</label><br>
    <input type="file" name="image" id="image"><br>
    
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br><br>

    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>



@stop
