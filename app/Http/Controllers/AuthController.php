<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // halaman login
    public function showLogin(Request $request)
    {
        $error = $request->query('error', '');
        return view('login', ['error' => $error]);
    }
    //proses login
    public function processLogin(Request $request)
    {
        $users = [
            'admin' => 'admin123',
            'dokter' => 'dokter123',
        ];

        $username = $request->input('username', '');
        $password = $request->input('password', '');
        $remember = $request->has('remember');

        if (isset($users[$username]) && $users[$username] === $password) {
            session(['user' => $username]);
            if ($remember) {
                setcookie('username', $username, time() + (30 * 24 * 60 * 60), '/');
            } else {
                setcookie('username', '', time() - 3600, '/');
            }
            return redirect()->route('home');
        } else {
            $error = 'Username atau Password salah!';
            return redirect()->route('login')->with('error', $error);
        }
    }

    public function logout()
    {
        session()->flush();
        setcookie('username', '', time() - 3600, '/');
        return redirect()->route('home');
    }
}

