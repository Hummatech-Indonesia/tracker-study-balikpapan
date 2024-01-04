<?php

namespace App\Services\Auth;

use App\Http\Requests\LoginRequest;

class LoginService
{
    /**
     * handleLogin
     *
     * @param  mixed $request
     * @return mixed
     */
    public function handleLogin(LoginRequest $request): mixed
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd('berhasil');
            if (auth()->user()->roles->pluck('name')[0] == 'alumni') {
                return view('alumni.index')->with('success', 'Berhasil Login.');
            }
            else if (auth()->user()->roles->pluck('name')[0] == 'admin') {
                return view('admin.index')->with('success', 'Berhasil Login.');
            }
            else if (auth()->user()->roles->pluck('name')[0] == 'company') {
                return view('company.index')->with('success', 'Berhasil Login.');
            }
            else if (auth()->user()->roles->pluck('name')[0] == 'student') {
                return view('company.index')->with('success', 'Berhasil Login.');
            }
        } else{
            // dd('gagal');
            return view('auth.login')->with('error', 'Email atau password salah.');
        }
    }

}
