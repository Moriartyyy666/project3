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
        // dd($request->all());

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role_id == Role::ADMIN) {
                return redirect()->route('admin');
            } elseif ($user->role_id == Role::CUSTOMER) {
                return redirect()->route('dashboard');
            }
        }

        return back()->with('error', 'Gagal melakukan autentikasi');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
