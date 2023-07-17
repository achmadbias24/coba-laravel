
@extends('layout.main')

@section('body')
<div class="container">
    <h1>Post</h1>
    <div class="row">
        <div class="col-md-6">
            <a href="/AddPost" class="btn btn-success mb-3">Create Post</a>
        </div>
        <div class="col-md-6">
            <form action="/post" method="get">
                <div class="input-group mb-3 justify-content-right">
                    <input type="text" class="form-control" placeholder="Cari artikel" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
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
            @foreach($post as $pos)
            
                <tr>
                    <th scope="row">{{ $pos->idpost }}</th>
                    <td>{{ $pos->judul }}</td>
                    <td>{{ $pos->content }}</td>
                    <td>{{ $pos->created_at->diffForHumans() }}</td>
                    <td>{{ $pos->account->name }}</td>
                    <td><a href="/LihatPost/{{ $pos->idpost }}" class="btn btn-success">Lihat</a>
                        <a href="/EditPost" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
           @endforeach
        </tbody>
    </table>
    {{ $post->links() }}
</div>
@endsection