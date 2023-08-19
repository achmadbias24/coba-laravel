@extends('layout.main')

@section('body')
<div class="container">
    <h1>Accounts</h1>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('failed') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <a href="/account/create" class="btn btn-success mb-3">Create Account</a>
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
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $account->username }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->role }}</td>
                <td>
                    <a href="/account/{{ $account->username }}" class="btn btn-success">Lihat</a>
                    <a href="/account/{{ $account->username }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/account/{{ $account->username }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" class="border-0" onclick="return confirm('Apakah Anda yakin menghapus akun ini?')">Hapus</button>
                    </form>                    
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    {{ $accounts->links() }}
</div>
@endsection