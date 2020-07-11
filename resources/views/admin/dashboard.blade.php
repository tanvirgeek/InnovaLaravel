@extends('admin.layout.master')

@section('content')

    <h1>This is Dashboard</h1>
    <h2>Upload Pdf</h2>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>

    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    <form action="{{route('upload.pdf')}}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        <label for="myfile">Select a file:</label>
        <input type="file" id="myfile" name="myfile"><br><br>
        <input type="submit">
    </form>

    <a class="btn btn-danger mt-5" href="{{route('logout')}}">Logout</a>

@endsection