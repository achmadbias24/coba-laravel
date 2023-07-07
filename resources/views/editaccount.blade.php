{{-- @dd($accounts) --}}
@extends('layout.main')
@section('body')
<div class="container">
    <h1 class="mt-3">Edit Akun : {{ $accounts->name }}</h1>
    <a href="/account" class="btn btn-secondary mb-3">Kembali</a>

    <form method="post" action="">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="{{ $accounts->username }}" readonly>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" value="{{ $accounts->username }}" name="name">
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" value="{{ $accounts->username }}" name="role">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection