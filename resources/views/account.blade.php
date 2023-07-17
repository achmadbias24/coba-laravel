@extends('layout.main')

@section('body')
<div class="container">
    <h1>Accounts</h1>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Akun <strong>{{ session('success') }}</strong> dibuat!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <a href="/AddAccount" class="btn btn-success mb-3">Create Account</a>
        </div>
        <div class="col-md-6">
            <form action="/account" method="get">
                <div class="input-group mb-3 justify-content-right">
                    <input type="text" class="form-control" placeholder="Cari akun" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)  
            <tr>
                <th scope="row">{{ $account->id }}</th>
                <td>{{ $account->username }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->role }}</td>
                <td>
                    <a href="/LihatAccount/{{ $account->username }}" class="btn btn-success">Lihat</a>
                    <a href="/EditAccount/{{ $account->username }}" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    {{ $accounts->links() }}
</div>
@endsection