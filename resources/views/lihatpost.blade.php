@extends('layout.main')
@section('body')
<div class="container">
    <h1></h1>
    <a href="/EditPost" class="btn btn-primary mb-3">Update</a>
    <a href="" class="btn btn-danger mb-3">Hapus</a>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
               
            </tr>
        </tbody>
    </table>
</div>
@endsection