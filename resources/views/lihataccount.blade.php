
@extends('layout.main')
@section('body')
<div class="container">
    <h1></h1>
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
                
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
               
            </tr>
        </tbody>
    </table>
</div>
@endsection