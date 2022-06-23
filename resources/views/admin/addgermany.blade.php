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

<h3>Add Data</h3>

<div class="container">
  <form method="post" action="{{ url('addgermany/') }}" enctype="multipart/form-data">
  	{{ csrf_field() }}
    <select name="germany_cat">
      <option hidden>Choose Category</option>
      @foreach($data as $data)
      <option value="{{ $data['germany_cat'] }}">{{ $data['germany_cat'] }}</option>
      @endforeach
    </select><br>
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" placeholder="Your Title.."><br>
    <label for="faq">FAQ</label><br>
    <input type="text"  name="faq" id="faq" placeholder="Question.."><br>
    <label for="answer">Answer</label><br>
    <input type="text"  name="answer" id="answer" placeholder="Answer.."><br>
    <label for="lname">image</label><br>
    <input type="file" name="image" id="image"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>
    <label for="lname">Details</label><br>
    <textarea class="description" name="description"></textarea><br><br>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>
<div class="row">
	<div class="col-md-12">
		<label for="">seo_url</label>
		<input type="text" name="seo_url" class="form-control">
	</div>
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
</div>
    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>

@stop
