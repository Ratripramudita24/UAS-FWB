<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function lihatregister(){
        return view('auth.register');
    }

    public function svregister(Request $request){
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('login')->with('succes', 'Login Berhasil');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function dashboardMahasiswa(){
        return view('Mahasiswa.dashboardMahasiswa');
    }

    public function login(){
        return view('auth.login');
    }
    public function svlogin(Request $request){

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user()->role;
            if ($user == 'admin' || $user == 'staf') {
                 return redirect()->route('dashboard');
            }
            else if($user == 'mahasiswa'){
                return redirect()->route('dahsboardMahasiswa');
            }
        }
        return back()->with('error', 'Email atau password salah atau akun tidak ditemukan');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
