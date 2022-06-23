@extends('adminlte::page')

@section('title', 'Dashboard')

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

    <p><center><h1 style="color: green">SERVICES</h1></center></p>
    <p>
    <a href="{{ url('services_form') }}"><span class="btn btn-primary">Add SERVICES</span></a></p>
    <table border="2" style="border-collapse: collapse;" width="100%" id="data-table">
        <thead>
    <tr style="text-align: center">
    	<th>Sr no.</th>
    	<th>Name</th>
    	<th>Image</th>
        <th>Description</th>
    	<th colspan="2">Action</th>
    </tr></thead>
    <tbody>
    @foreach($data as $value)
  	<tr style="text-align: center">
  		<td>{{ $i++ }}</td>
  		<td>{{ $value['title'] }}</td>
  		<td><img src="{{ asset('public/assets/images/'.$value['image'] )}}" width="70"></td>
        <td>{{ substr($value['description'],0,12) }}...</td>
  		<td><a href="{{ url('getservicesforedit/'.$value['id']) }}" class="btn btn-warning">Edit</a>
  		<a href="{{ url('deleteservices/'.$value['id']).'/'.$value['image']}}" class="btn btn-danger">Delete</a></td>
  	</tr>
    @endforeach
    </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> //$("#data-table").DataTable(); </script>
@stop