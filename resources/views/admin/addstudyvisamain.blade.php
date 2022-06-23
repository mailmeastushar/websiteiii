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

<h3>Add Study Visa Top</h3>

<div class="container">
  <form method="post" action="{{ url('store-mainstudyvisa') }}" enctype="multipart/form-data">
  	{{ csrf_field() }}
    <select name="service_name">
      <option>Choose Study Visa</option>
      @foreach($data as $data)
      <option value="{{ $data['country_study_visa'] }}">{{ $data['country_study_visa'] }}</option>
      @endforeach
    </select><br>
    <label for="fname">Title</label><br>
    <input type="text"  name="name" id="name" placeholder="Your Title.."><br>
    <label for="image">image</label><br>
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

    <button type="submit" class="btn btn-primary">Submit</button> 
  </form>
</div>

@stop
