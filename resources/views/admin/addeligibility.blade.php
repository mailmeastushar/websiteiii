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
  <form method="post" action="{{ url('addeligibility/') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
     <select name="country_name" id="country_name">
      <option hidden>Choose Country</option>
      @foreach($data as $data)
      <option value="{{ $data['country_name']}}">{{ $data['country_name']}}</option>
      @endforeach
    </select><br>
    
    <label>Image</label><br>
    <input type="file" name="image"><br>
    <label for="lname">Alt</label><br>
    <input type="text" name="alt" id="alt" placeholder="Alternate name of  image.."><br>

    <label for="lname">Description</label><br>
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
