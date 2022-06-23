<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("name")}}</span>
        </div>
    </div>
  
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label("state") !!}
            {!! Form::text("state",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("state")}}</span>
        </div>
    </div>
  
    <div class="col-md-6">
        <div class="form-group">
            
            {!! Form::label("email") !!}
            {!! Form::email("email",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("email")}}</span>
            
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            
            {!! Form::label("mobile") !!}
            {!! Form::text("mobile",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("mobile")}}</span>
            
        </div>
    </div>
</div>


