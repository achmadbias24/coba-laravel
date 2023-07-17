<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index()
    {
        return view('post', [
            "title" => "Account",
            "post" => Post::with('account')->search(request(['search']))->latest()->paginate(5)
        ]);
    }
    function AddPost()
    {
        return view('addpost', [
            "title" => "Tambah Post"
        ]);
    }
    function LihatPost(Post $post)
    {
        return view('lihatpost', [
            "title" => "Lihat Post",
            "posts" => $post
        ]);
    }
    function EditPost()
    {
        return view('editpost', [
            "title" => "Edit Post"
        ]);
    }
}
