@extends('adminlte::page')
@section('title', 'Admin')
@php 
             $name="newcontacts";
            $route="newcontacts";
@endphp            
@section('content_header')
    <h1 class="m-0 text-dark">{{$name}}s Management</h1>
@stop

@section('content')
    @parent
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
   
            <a href="{{ route($route.'.index') }}" class="btn btn-info">  New Contacts Listing</a>
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
              <h3 class="card-title">{{ $name }}s Listing</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               {!! Form::open(['route' => $route.'.store',"files"=>"true"]) !!}
     
                    @include("admin.".$route.".form")
               
                    <button class="btn btn-success"><span class="fa fa-save"></span> Save</button>
                
                {!! Form::close() !!}
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