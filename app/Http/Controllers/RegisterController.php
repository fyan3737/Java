<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => "register",
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        user::create($validatedData);
        return redirect('/login')->with('sukses','Registrasi Berhasil, Silahkan Login !');
    }
}
