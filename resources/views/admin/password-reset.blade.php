@extends('admin.layout.outer')

@section('content')
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="panel-body">
                                @if(isset($error))
                                    <p class="alert alert-danger text-danger">{{$error}}</p>
                                @endif

                                @if(isset($success))
                                    <p class="alert alert-success text-success">{{$success}}</p>
                                @endif
                                <form action="{{route('password.reset.post')}}" id="register-form" role="form" autocomplete="off" class="form" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="email" placeholder="Email Address" class="form-control"  type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <input id="send-reset-email" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                        <div class="float-right mt-2 ml-2" id="loading">
                                            <div class="spinner-border text-info"  role="status"></div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection