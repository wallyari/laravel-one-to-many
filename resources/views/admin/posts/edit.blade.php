@extends('layouts.app')
@section('content')

<div class="container">
        <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
            @csrf
            @method('PUT')
        <h3 class="mb-4">Edit Post</h3>

        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                <option {{(old('category_id',$post->category_id)=="")?'selected':''}} value="">Category Null</option>  
                @foreach ($categories as $category)
                <option {{(old('category_id', $post->category_id)==$category->id)?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>                
                @endforeach
            </select>            
            @error('category_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" required placeholder="Enter title" name="title" value="{{old('title', $post->title)}}" max="255" >
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            </div>
            @enderror
        
            <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" required placeholder="Enter Content" name="content">{{old('content', $post->title)}}
            </textarea>
            @error('content')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

</div>
    
@endsection