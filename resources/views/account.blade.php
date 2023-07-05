@extends('layout.main')

@section('body')
<div class="container">
    <h1>Accounts</h1>
    <a href="" class="btn btn-success mb-3">Create Account</a>
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
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>
                        <a href="/LihatAccount" class="btn btn-success">Lihat</a>
                        <a href="/EditAccount" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
@endsection