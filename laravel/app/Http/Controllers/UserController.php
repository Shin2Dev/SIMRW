<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ubah_password_index($role)
    {
        return view('form.password.ubah-password', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Ubah Password', 
            'role' => $role,
            'route' => 'ubah_password',
            'pages' => 'profil',
            'id' => null
        ]);
    }

    public function ubah_password($role, Request $request){
        $users = Auth::user();
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required',
        ]);

        $user = User::where('username', $users->username)->first();

        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->with('error', 'Password lama tidak sesuai');
        }

        $user->password = Hash::make($request->password_baru);
        $user->update();

        return redirect()->route('profil', ['role' => $role])->with('success', 'Password berhasil diubah');
    }
}
