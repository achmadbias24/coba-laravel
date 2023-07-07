@extends('layout.main')

@section('body')
<div class="container">
    <h1>Post</h1>
    <a href="/AddPost" class="btn btn-success mb-3">Create Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Username</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <th scope="row">1</th>
                    <td>Ini percobaan</td>
                    <td>Percobaan Laravel</td>
                    <td>2023-07-05 21:02:00</td>
                    <td>Admin</td>
                    <td><a href="/LihatPost" class="btn btn-success">Lihat</a>
                        <a href="/EditPost" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
           
        </tbody>
    </table>
</div>
@endsection