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

<h3>Add CRS</h3>

<div class="container">
  <form method="post" action="{{ url('add_crs_point') }}" enctype="multipart/form-data"> 
  	{{ csrf_field() }}
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" placeholder="Your Title.."><br>

    <label for="lname">image</label><br>
    <input type="file" name="image" id="image"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>

    <label for="fname">Description</label><br>
    <textarea class="description" name="description"></textarea><br><br>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>

    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>



@stop
