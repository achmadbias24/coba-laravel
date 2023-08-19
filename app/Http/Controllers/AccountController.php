<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account', [
            "title" => "Account",
            "accounts" => Account::search(request(['search']))->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addaccount', [
            "title" => "Tambah Account"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'alpha_num|min:8|unique:account',
            'password' => 'alpha_num|min:8',
            'name' => 'min:2',
            'role' => 'min:5'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        Account::create($validated);
        $request->session()->flash('success', 'Akun Berhasil Dibuat');
        return redirect('/account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('lihataccount', [
            "title" => "Lihat Account",
            "accounts" => $account
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('editaccount', [
            "title" => "Edit Account",
            "account" => $account
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $validated = $request->validate([
            'username' => 'alpha_num|min:8|unique:account',
            'password' => 'alpha_num|min:8',
            'name' => 'min:2',
            'role' => 'min:5'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        Account::where('id', $account->id)->update($validated);
        $request->session()->flash('success', 'Akun Berhasil Diupdate');
        return redirect('/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        if ($account->id == auth()->user()->id) {
            return redirect('/account')->with('failed', 'Anda tidak dapat menghapus akun anda sendiri!');
        } else {
            Account::destroy($account->id);
            return redirect('/account')->with('success', 'Akun Berhasil Dihapus');
        }
    }
}
