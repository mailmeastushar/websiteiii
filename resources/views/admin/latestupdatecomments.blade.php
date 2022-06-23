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

    <p><center><h1 style="color: green">Blog Comments</h1></center></p>
    <p><center><h3 class="text-primary">{{$blog->name}}</h3></center></p>
    <p><center><a href="{{url('latest_update')}}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left mr-1"></i>Back to Latest Update Page</a></center></p>
    <p>
   <table border="2" style="border-collapse: collapse;" width="100%">
    <tr style="text-align: center">
    	<th>Sr no.</th>
    	<th>Name</th>
    	<th>Mobile</th>
        <th>Email</th>
        <th>Comments</th>
        <th>Reply</th>
    	<th colspan="2">Action</th>
    </tr>
    @foreach($data as $value)
  	<tr style="text-align: center">
  		<td>{{ $i++ }}</td>
  		<td>{{ $value['name'] }}</td>
  		<td>{{ $value['mobile'] }}</td>
  		<td>{{ $value['email'] }}</td>
  		<td>{{ $value['message'] }}</td>
  		<td>
              @if(!empty($value['reply']))
              {{ $value['reply'] }}
              <a href="javascript:void(0);" class="badge badge-success" onclick="comment_reply('{{$value['id']}}','{{$value['reply']}}')">Edit</a>
              @else
              <a href="javascript:void(0);" class="badge badge-success" onclick="comment_reply('{{$value['id']}}','{{$value['reply']}}')">Reply</a>                
              @endif
            
        </td>
  		<td>
            @php
            $btn_class="success";
            $btn_icon="check";
            $status=0;
            if($value['is_visible']==0){
                $status=1;
                $btn_icon="times";
                $btn_class="danger";
            }
            @endphp
            <a href="{{url('active_inactive_comment/'.$value['id'].'/'.$status)}}" class="btn btn-sm btn-{{$btn_class}}">
                <i class="fa fa-{{$btn_icon}}"></i>
            </a>
        </td>
  		<td>
            <a href="{{url('delete_latest_update_comment/'.$value['id'])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete?')">
                <i class="fa fa-trash"></i>
            </a>
        </td>
  	</tr>
    @endforeach
    </table>
    <span>
      {{$data->links()}}
    </span>

<!-- Modal -->
<div id="commentReplyModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Comment Reply</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="{{url('/add_comment_reply')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="reply" id="reply" placeholder="Enter reply..." maxlength="200" required>
                        </div>
                    </div>
                    <div class="col-12">
                       <div class="form-group text-right">
                            <input type="hidden" name="blog_comment_id" id="blog_comment_id" value="">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        // console.log('Hi!');
        function comment_reply(id,value){
            $('#blog_comment_id').val(id);
            $('#reply').val(value);
            $('#commentReplyModal').modal('show');
        }
    </script>
@stop