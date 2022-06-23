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

<h3>Add Update</h3>

<div class="container">
  <form method="post" action="{{ url('addlatestupdate') }}" enctype="multipart/form-data"> 
  	{{ csrf_field() }}
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" placeholder="Your Title.."><br>
    <label for="fname">Seo Url</label><br>
    <input type="text"  name="seo_url" id="seo_url" placeholder="seo_url.."><br>

    <label for="lname">image</label><br>
    <input type="file" name="image" id="image"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>
    <label for="fname">Button Title</label><br>
    <input type="text" class="button_title" name="button_title"><br>
    <label for="fname">Short Description (Max Length: 250)</label><br>
    <input type="text" class="short_description" name="short_description" maxlength="245"><br>
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
    <div class="col-md-6">
		<label for="">meta_title</label>
		<input type="text" name="meta_title" class="form-control">
	</div>
	<div class="col-md-6">
		<label for="">meta_keywords</label>
		<input type="text" name="meta_keywords" class="form-control">
	</div>
	<div class="col-md-12">
		<label for="">meta_description</label>
		<textarea name="meta_description" id="" cols="30" rows="3"></textarea>
	</div>

    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>



@stop
