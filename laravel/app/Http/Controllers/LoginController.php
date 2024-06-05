<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Index (PERBAIKAN)
    public function index(){
        return view('page.login', [
            'dir' => 'pages',
            'css' => 'login-page',
            'title' => 'Login'
        ]);
    }

    // Autentikasi Login dan Pembagian Role (Warga, RT, RW)
    public function login(Request $request){
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $request->session()->regenerate();

            return redirect()->route('dashboard', ['role' => $user->role])->with('success', 'Berhasil login.');
        }

        return redirect()->back()->with('error', 'Login gagal. Silakan coba lagi.');
    }

    // Logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
