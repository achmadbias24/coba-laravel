@extends('layout.main')
@section('body')
<div class="container">
    <h1></h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="" readonly>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" value="" name="name">
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" value="" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection