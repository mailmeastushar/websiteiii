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

    <p><center><h1 style="color: green">Assessment</h1></center></p>
    <p>
      <table border="2" style="border-collapse: collapse;" width="100%">
        <tr style="text-align: center">
          <th>Sr no.</th>
          <th>Created at</th>
          <th>Resume</th>
          <th>Title</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>County</th>
          <th>City</th>
          <th>DOB</th>
          <th>Qualification</th>
          <th>Profession</th>
          <th>Year Of Experience</th>
          <th>Action</th>
        </tr>
        @foreach($assessments as $value)
        <tr style="text-align: center">
          <td>{{ $i++ }}</td>
          <td>{{ $value['created_at'] }}</td>
          <td>
            @if(!empty($value['resume']) && file_exists(public_path("/assets/images/".$value['resume'])))
            <a href="{{url("public/assets/images/".$value['resume'])}}" target="_blank">View</a>
            @endif
          </td>
          <td>{{ $value['title'] }}</td>
          <td>{{ $value['name'] }}</td>
          <td>{{ $value['email'] }}</td>
          <td>{{ $value['mobile'] }}</td>
          <td>{{ $value['country'] }}</td>
          <td>{{ $value['city'] }}</td>
          <td>{{ $value['dob'] }}</td>
          <td>{{ $value['qulification'] }}</td>
          <td>{{ $value['profession'] }}</td>
          <td>{{ $value['exprience'] }}</td>
          <td><a href="{{ url('deleteassisst/'.$value['id']) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </table>
    <span>
      {{ $assessments->links() }}
    </span>
  </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop