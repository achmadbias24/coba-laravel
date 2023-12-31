@extends('layout.main')
@section('body')
<div class="container">
    <h1>{{ $accounts->name }}</h1>
    <a href="/account" class="btn btn-secondary mb-3">Kembali</a>
    <a href="/EditAccount" class="btn btn-primary mb-3">Update</a>
    <a href="#" class="btn btn-danger mb-3">Hapus</a>
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
            <tr>
                <?php $no=1;?>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $accounts->username }}</td>
                    <td>{{ $accounts->name }}</td>
                    <td>{{ $accounts->role }}</td>
               <?php $no++; ?>
            </tr>
        </tbody>
    </table>
</div>
@endsection