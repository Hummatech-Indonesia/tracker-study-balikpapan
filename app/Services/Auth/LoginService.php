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
            if (auth()->user()->roles->pluck('name')[0] == 'alumni') {
                return view('index')->with('success', 'Berhasil Login.');
            }
        } else{
            return view('auth.login')->with('error', 'Email atau password salah.');
        }
    }

}
