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

    <p><center><h1 style="color: green">Policy</h1></center></p>
    <p>
    <a href="{{ url('policy_form') }}"><span class="btn btn-primary">Add DATA</span></a></p>
    <table border="2" style="border-collapse: collapse;" width="100%">
    <tr style="text-align: center">
    	<th>Sr no.</th>
    	<th>Name</th>
      <th>Description</th>
    	<th colspan="2">Action</th>
    </tr>
    @foreach($data as $value)
  	<tr style="text-align: center">
  		<td>{{ $i++ }}</td>
  		<td>{{ $value['name'] }}</td>
      <td>{{ substr($value['description'],0,12) }}...</td>
  		<td><a href="{{ url('editpolicy/'.$value['id']) }}" class="btn btn-warning">Edit</a></td>
  		<td><a href="{{ url('deletepolicy/'.$value['id']).'/'.$value['image']}}" class="btn btn-danger">Delete</a></td>
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