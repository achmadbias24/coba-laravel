
@extends('layout.main')

@section('body')
<div class="container">
    <h1>Post</h1>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    <div class="row">
        <div class="col-md-6">
            <a href="/post/create" class="btn btn-success mb-3">Create Post</a>
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
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pos->judul }}</td>
                    <td>{!! $pos->content !!}</td>
                    <td>{{ $pos->created_at->diffForHumans() }}</td>
                    <td>{{ $pos->account->name }}</td>
                    <td><a href="/post/{{ $pos->id }}" class="btn btn-success">Lihat</a>
                        <a href="/post/{{ $pos->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/post/{{ $pos->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger border-0" onclick="return confirm('yakin menghapus post ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
           @endforeach
        </tbody>
    </table>
    {{ $post->links() }}
</div>
@endsection