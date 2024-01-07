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
        $role = auth()->user()->roles->pluck('name')[0];
        switch ($role) {
            case 'alumni':
                return redirect()->route('alumni.dashboard-alumni')->with('success', 'Berhasil Login.');
            case 'admin':
                return redirect()->route('dashboard')->with('success', 'Berhasil Login.');
            case 'company':
                return redirect()->route('company-dashboard')->with('success', 'Berhasil Login.');
            case 'student':
                return redirect()->route('dashboard-student')->with('success', 'Berhasil Login.');
            default:
                return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
        }
    } else {
        return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
    }
}
}
