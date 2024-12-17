<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function proses(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect berdasarkan peran pengguna
            return redirect()->route($user->getRedirectRoute());
        }

        // Umpan balik kegagalan autentikasi
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

// Tambahan di Model User
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function getRedirectRoute()
    {
        $routes = [
            Role::ADMIN => 'admin',
            Role::CUSTOMER => 'dashboard',
        ];

        return $routes[$this->role_id] ?? 'login';
    }
}
