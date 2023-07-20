@extends('layout.main')
@section('body')
<div class="container">
    <h1>Create user</h1>
    <form method="post" action="/account">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required>
            @error('username')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" required>
            @error('password')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            @error('name')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" name="role" value="{{ old('role') }}" required>
            @error('role')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>   
@endsection