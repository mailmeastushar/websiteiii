@extends('adminlte::page')

@section('title', 'latest_update')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@php
$i = 1;
@endphp
@section('content')
@if (Session::has('message'))
       {!! session('message') !!}
@endif

    <p><center><h1 style="color: green">CRS Calculator</h1></center></p>
    <p>
    <a href="{{ url('form_crs_point/') }}"><span class="btn btn-primary">Add CRS</span></a></p>
    <table border="2" style="border-collapse: collapse;" width="100%">
    <tr style="text-align: center">
    	<th>Sr no.</th>
    	<th>Name</th>
    	<th>Image</th>
      <th>Description</th>
    	<th colspan="2">Action</th>
    </tr>
    @foreach($data as $value)
  	<tr style="text-align: center">
  		<td>{{ $i++ }}</td>
  		<td>{{ $value['name'] }}</td>
  		<td><img src="{{ asset('public/assets/images/'.$value['image'] )}}" width="70"></td>
      <td>{{ substr($value['description'],0,10) }}...</td>
  		<td><a href="{{ url('edit_crs_point/'.$value['id']) }}" class="btn btn-warning">Edit</a></td>
  		<td><a href="{{ url('delete_crs_point/'.$value['id']).'/'.$value['image']}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete?')">Delete</a></td>
  	</tr>
    @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop