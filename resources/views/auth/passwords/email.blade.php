@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<form class="form-horizontal" role="form" method="=POST" action="{{ url('/password/email')}}">
    
</form>

<div class="form-group{{ $errors->has('email') ?' has ' email' :"}}">
    {!! Form::email('email','Alamat Email',['class=>col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email(',email'alamat Email'.['class=>col-md-4 control-label'])!!}
        {!! $errors->fist('email','<p class="help-block">:massage</p>')!!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-4">
    <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-envelope"></i> Kirim link reset password
    </button>
     </div>
                    </div>
                    {!! Form::close()!!}
                    </div>
                 </div>
             </div>
        </div>
     </div>
   @endsection
 </div>
</div>