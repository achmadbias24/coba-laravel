<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('post', [
            "title" => "Account"
        ]);
    }
    function LihatPost()
    {
        return view('lihatpost', [
            "title" => "Lihat Post"
        ]);
    }
    function EditPost()
    {
        return view('editpost', [
            "title" => "Edit Post"
        ]);
    }
}
