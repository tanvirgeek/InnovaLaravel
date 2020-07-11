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
                            <h2 class="text-center">Reset Password</h2>
                            <hr>
                            <div class="panel-body">
                                @if(session()->has('message'))
                                    <div class="alert alert-warning">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                                <form action="{{route('reset.password.post', $code)}}" id="register-form" role="form" autocomplete="off" class="form" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="password" placeholder="New Password" class="form-control"  type="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="btn btn-lg btn-primary btn-block" value="Confirm" type="submit">
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