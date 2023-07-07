@extends('layout.main')

@section('body')
<div class="container">
    <h1>Accounts</h1>
    <a href="/AddAccount" class="btn btn-success mb-3">Create Account</a>
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
            <?php $no=1; ?>  
            @foreach ($accounts as $account)  
            <tr>
                <th scope="row"><?=$no; ?></th>
                <td>{{ $account->username }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->role }}</td>
                <td>
                    <a href="/LihatAccount/{{ $account->username }}" class="btn btn-success">Lihat</a>
                    <a href="/EditAccount/{{ $account->username }}" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            
            <?php $no++; ?>  
            @endforeach
        </tbody>
    </table>
</div>
@endsection