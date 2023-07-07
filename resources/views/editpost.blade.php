@extends('layout.main')
@section('body')
<div class="container">
    <h1>Update Post</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="" required>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" name="content" value="" required>
        </div>
        <input type="hidden" name="id" value="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection