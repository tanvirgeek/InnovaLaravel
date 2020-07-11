<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta
            name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <script src="https://kit.fontawesome.com/cd788f68fb.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="./images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/template.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/admin/forgotpass.css')}}"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <title>Innova & MEP</title>

</head>

<body>

<div class="dashboard">

    <div class="header">
        @if(auth()->check())
            <li class="logout"><a href="{{route('logout')}}">Logout</a></li>
        @endif
    </div>

    <div class="sidebar">
        <div class="admin-logo text-center mt-5">
            <img src="{{asset('images/admin.jpg')}}" alt="Admin">
            <p>Admin</p>
        </div>
        <ul>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('files')}}">Files</a></li>
        </ul>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    //password reset page email processing
    $('#loading').hide();

    $('#send-reset-email').click(function () {
        $('#loading').show();
    });
</script>
</body>

</html>
