<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function index()
    {
        return view('account', [
            "title" => "Account"
        ]);
    }
    function LihatAccount()
    {
        return view('lihataccount', [
            "title" => "Lihat Account"
        ]);
    }
    function EditAccount()
    {
        return view('editaccount', [
            "title" => "Edit Account"
        ]);
    }
}
