@extends('admin.layout.outer')
@section('content')

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Admin<br> Login Page</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                @if(session()->has('error'))
                    <p class="alert alert-danger text-danger">{{session()->get('error')}}</p>
                @endif

                @if(session()->has('success'))
                    <p class="alert alert-success text-success">{{session()->get('success')}}</p>
                @endif

                <form action="{{route('login.post')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-black">Login</button>
                    <a href="{{route('password.reset')}}"> Forgot Password? </a>
                </form>
            </div>
        </div>
    </div>

@endsection