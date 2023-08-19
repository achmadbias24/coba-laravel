@extends('layout.main')
@section('body')
<div class="container">
    <h1 class="mt-3">Edit Account : {{ $account->name }}</h1>
    <a href="/account" class="btn btn-secondary">Kembali</a>
    <form method="post" action="/account/{{ $account->username }}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username',$account->username) }}" required>
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
            <input type="text" class="form-control" name="name" value="{{ old('name',$account->name) }}" required>
            @error('name')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" name="role" value="{{ old('role',$account->role) }}" required>
            @error('role')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>   
@endsection