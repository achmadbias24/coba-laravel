@extends('layout.main')
@section('body')
<div class="container">
    <div class="row">
        <h1>{{ $posts->judul }}</h1>
    </div>
    <div class="row">
        <a href="/post" class="btn btn-secondary mb-3 mr-2">Kembali</a>
        <a href="/post/{{ $posts->idpost }}/edit" class="btn btn-primary mb-3 mr-2">Update</a>
        <form action="/post/{{ $posts->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('yakin menghapus post ini?')">Hapus</button>
        </form>    
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">date</th>
                <th scope="col">username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                    <th scope="row">1</th>
                    <td>{{ $posts->judul }}</td>
                    <td>{!!$posts->content!!}</td>
                    <td>{{ $posts->created_at->diffForHumans() }}</td>
                    <td>{{ $posts->account->name }}</td>
               
            </tr>
        </tbody>
    </table>
</div>
@endsection