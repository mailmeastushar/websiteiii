@extends('adminlte::page')
@section('title', 'Admin')
@php 
            $name="newcontacts";
            $route="newcontacts";
@endphp            
@section('content_header')
    <h1 class="m-0 text-dark">{{$name}} Management</h1>
@stop

@section('content')
    @parent
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <a href="{{ route($route.'.create') }}" class="btn btn-info"> Add New Contact</a>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12">
         
          <div class="card  card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ $name }} Listing</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data-table-gaurav" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th> Email</th>
                        <th>Mobile</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @php $sno=1;@endphp
                    @foreach($data as $client)
                        <tr>
                           
                            <td>{{ $sno++ }}</td>
                            <td>
                                {{ $client->name }} 
                            </td>
                           
                            <td>
                                {{ $client->email }}
                            </td>
                           
                            <td>
                                {{ $client->mobile }}
                            </td>
                            <td>
                                {{ $client->state }}
                            </td>
                           
                            
                            <td>
                                <a href="{!! route($route.'.edit', [$client->id]) !!}" class="btn btn-outline-success btn-sm raw-margin-right-8"><i
                                            class="fa fa-pencil-alt"></i> </a>
                                <form method="post" action="{!! route($route.'.destroy', [$client->id]) !!}"
                                      style="display: inline-block;">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-outline-danger btn-sm raw-margin-right-8"
                                            onclick="return confirm('Are you sure you want to delete this {{ $name }}?')"><i
                                                class="fa fa-trash"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop