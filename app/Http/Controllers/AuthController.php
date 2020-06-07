<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('email')) {
            return redirect('/admin');
        } else {
            return view('/auth/login');
        }
    }
    public function register(Request $request)
    {
        if ($request->session()->has('email')) {
            return redirect('/admin');
        } else {
            return view('/auth/register');
        }
    }
    public function register_proc(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'npm'      => 'required|unique:user|min:12|max:12',
            'email'    => 'required|email|unique:user',
            'password' => 'required|alpha_num|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);
        User::create([
            'nama'      => $request->nama,
            'npm'       => $request->npm,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'image'     => 'default.jpg',
            'role_id'   => 1,
            'is_active' => 1,
        ]);

        Session::flash('sukses', 'Registrasi Akun Berhasil, Silakan Login!');
        return redirect('/');
    }
    public function login_proc(Request $request)
    {
        $email    = $request->email;
        $password = $request->pass;
        $user     = User::where('email', $email)->first();

        if ($user) {
            if ($user->is_active == 1) {
                if (Hash::check($password, $user->password)) {
                    $request->session()->put('email', $email);
                    return redirect('/admin');
                } else {
                    Session::flash('gagal', 'Username atau Password Salah!');
                    return redirect('/');
                }
            } else {
                Session::flash('gagal', 'Akun Belum Diverifikasi');
                return redirect('/');
            }
        } else {
            Session::flash('gagal', 'Akun Belum Terdaftar');
            return view('/auth/login');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('email');
        return redirect('/');
    }
}
