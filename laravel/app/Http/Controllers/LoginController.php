<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            $request->session()->regenerate();

            $user = Auth::user();

            $request->session()->put('user', $user);

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

    // Lupa Password
    public function forgot_password(Request $request){
        $request->validate([
            'nik' => 'required|string|size:16'
        ]);

        $user = User::where('username', $request->nik)->first();

        if (!$user) {
            return back()->with('error', 'NIK tidak ditemukan / tidak terdaftar');
        }

        return redirect()->route('ubah_pass');
    }

    public function ubah_pass_index(){
        return view('page.ubah_password', [
            'dir' => 'pages',
            'css' => 'login-page',
            'title' => 'Ubah Password'
        ]);
    }

    public function ubah_pass(Request $request){
        $request->validate([
            'username' => 'required|string|size:16',
            'password_baru' => 'required',
            'ulangi_password_baru' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($request->password_baru == $request->ulangi_password_baru){
            
        }
    }
}