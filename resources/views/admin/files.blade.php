@extends('admin.layout.master')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Added On</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($pdfs as $key => $pdf)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$pdf->name}}</td>
                <td>{{$pdf->created_at}}</td>
                <td><a class="btn btn-danger" href="{{route('delete.file', $pdf->id)}}">Delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection