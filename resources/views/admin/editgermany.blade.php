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

<h3>Edit Blog</h3>

<div class="container">
  <form method="post" action="{{ url('updategermany/') }}" enctype="multipart/form-data"> 
  	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $data['id'] }}">
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" value="{{ $data['name'] }}"><br>
    
    <label for="faq">FAQ</label><br>
    <input type="text"  name="faq" id="faq" value="{{ $data['faq'] }}"><br>
    <label for="answer">Answer</label><br>
    <input type="text"  name="answer" id="answer" value="{{ $data['answer'] }}"><br>
    <label for="lname">image</label><br>
    <img src="{{ asset('public/assets/images/'.$data['image']) }}" width="60"><br>
    <input type="file" name="image" id="image"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>

    <label for="fname">Description</label><br>
    <textarea class="description" name="description" rows="7">{{ $data['description'] }}</textarea><br><br>
<div class="row">
	<div class="col-md-12">
		<label for="">seo_url</label>
		<input type="text" name="seo_url" class="form-control" value="{{ $data['seo_url'] }}">
	</div>
	<div class="col-md-6">
		<label for="">meta_title</label>
		<input type="text" name="meta_title" class="form-control" value="{{ $data['meta_title'] }}">
	</div>
	<div class="col-md-6">
		<label for="">meta_keywords</label>
		<input type="text" name="meta_keywords" class="form-control" value="{{ $data['meta_keywords'] }}">
	</div>
	<div class="col-md-12">
		<label for="">meta_description</label>
		<textarea name="meta_description" id="" cols="30" rows="3">{{ $data['meta_description'] }}</textarea>
	</div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>



@stop
