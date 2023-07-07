<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Account;

class AccountController extends Controller
{
    function index()
    {
        return view('account', [
            "title" => "Account",
            "accounts" => Account::all()
        ]);
    }
    function AddAccount()
    {
        return view('addaccount', [
            "title" => "Tambah Account"
        ]);
    }
    function LihatAccount(Account $account)
    {
        return view('lihataccount', [
            "title" => "Lihat Account",
            "accounts" => $account
        ]);
    }
    function EditAccount(Account $account)
    {
        return view('editaccount', [
            "title" => "Edit Account",
            "accounts" => $account
        ]);
    }
}
