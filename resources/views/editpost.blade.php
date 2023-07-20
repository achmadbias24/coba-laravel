@extends('layout.main')
@section('body')
<div class="container">
    <h1>Edit Post</h1>
    <form action="/post/{{ $post->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="judul" value="{{ old('judul',$post->judul) }}" required>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            @error('content')
               <small class="text-danger">{{ $message }}</small> 
            @enderror
            <input id="content" type="hidden" name="content" value="{{ old('content',$post->content) }}" required>
            <trix-editor input="content"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection