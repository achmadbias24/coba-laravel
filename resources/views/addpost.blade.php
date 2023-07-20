@extends('layout.main')
@section('body')
<div class="container">
    <h1>Add Post</h1>
    <form action="/post" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}" required>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            @error('content')
               <small class="text-danger">{{ $message }}</small> 
            @enderror
            <input id="content" type="hidden" name="content" value="{{ old('content') }}" required>
            <trix-editor input="content"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection