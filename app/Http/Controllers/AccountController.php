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
            "accounts" => Account::search(request(['search']))->paginate(5)
        ]);
    }
    function AddAccount()
    {
        return view('addaccount', [
            "title" => "Tambah Account"
        ]);
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'username' => 'alpha_num|min:8|unique:account',
            'password' => 'alpha_num|min:8',
            'name' => 'min:2',
            'role' => 'min:5'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        Account::create($validated);
        return redirect('/account');
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
