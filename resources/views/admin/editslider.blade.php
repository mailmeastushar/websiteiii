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

<h1>Edit Slider</h1>
<div class="container">
  <form method="post" action="{{ url('editslider') }}" enctype="multipart/form-data"> 
  	{{ csrf_field() }}
  	<input type="hidden" name="id" value="{{ $data['id'] }}">
    <label for="fname">Title</label><br>
    <input type="text"  name="name" value="{{ $data['name'] }}" id="name" placeholder="Your Title.."><br>
    <label for="lname">image</label><br>
    <input type="file"  name="image" id="name"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>
    
    <img src="{{ asset('public/assets/images/'.$data['image']) }}" width="100"><br><br>
    <button type="submit" class="btn btn-primary">Update</button> 
  </form>
</div>



@endsection