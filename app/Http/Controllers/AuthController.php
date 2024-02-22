<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario de registro.
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|',
        ]);

        // Creación del registro en la base de datos
        User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // auth()->login($user);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('login.index');
    }

    public function loggea(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }
}