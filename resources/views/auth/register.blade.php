@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                {!! Form ::open(['url'=>'/register','class'=>'form-horizontal']) !!}
                <div class="form-grup{{ $errors->has('name') ? ' has-error' :''}}">
                {!! Form::label('email','Alamat Email',['class'=>'control-label']) !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
                {!! $errors->first('email','<p class="help-block">:massage</p>'')!!}
                  </div>
                </div>


                <div class="form-grup{{ $errors->has('password')?' has-error' :''}}">
                {!! Form::label('password',['class'=>'form-control']) !!}
                <div class="col-md-6">
                    {!! Form::password('password','<p class="help-block">:masssage</p>') !!}
                    {!! $errors->first('password','<p class="help-block">:massage</p>'')!!}
                  </div>
                </div>


                <div class="form-grup{{ $errors->has('password_confirmation') ? ' has-error' : " }}">
                  {!! Form::label('password_confirmation','Konfirmasi Password',['class'=>col-md-4 control-label']) !!}
                  <div class="col-md-6">
                  {!! $errors->first('password_confirmation','<p class="help-block">:message</p>') !!}  
                  </div>
                </div>

                <div class="form-grup">
                    <div class="col-md-6 col-md-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Daftar
                        </button>
                    </div>
                </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection