@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    <a href="#" class="btn btn-primary">SHOW</a>
                    <a href="#" class="btn btn-warning">EDIT</a>
                    <a href="#" class="btn btn-danger">DELETE</a>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>

</div>
    
@endsection