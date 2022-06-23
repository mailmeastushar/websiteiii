@extends('adminlte::page')

@section('title', 'Enqury')

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

    <p><center><h1 style="color: green">Enquries</h1></center></p>
    <p>
    <table border="2" style="border-collapse: collapse;" width="100%">
    <tr style="text-align: center">
    	<th>Sr no.</th>
    	<th>Created at</th>
    	<th>First Name</th>
    	<th>Last Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Message</th>
    </tr>
    @foreach($data as $value)
  	<tr style="text-align: center">
  		<td>{{ $i++ }}</td>
  		<td>{{ $value['created_at'] }}</td>
  		<td>{{ $value['name'] }}</td>
  		<td>{{ $value['lname'] }}</td>
      <td>{{ $value['email'] }}</td>
      <td>{{ $value['mobile'] }}</td>
      <td>{{ $value['message'] }}</td>
  	</tr>
    @endforeach
    </table>
  {{ $data->links() }}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop