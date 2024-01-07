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
        return redirect()->route('dashboard')->with('success', 'Berhasil Login.');
    } else {
        return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
    }
}
}
