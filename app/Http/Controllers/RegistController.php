<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function index()
    {
        return view('regist');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|unique:users'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return Redirect('/login')->with('Berhasil!', 'Berhasil Membuat Akun!');

    }
}
