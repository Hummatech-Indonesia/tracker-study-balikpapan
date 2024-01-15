<?php

namespace App\Services\Auth;

use App\Contracts\Interfaces\UserInterface;
use App\Enums\RoleEnum;
use App\Enums\StatusEnum;
use App\Http\Requests\LoginRequest;

class LoginService
{
    /**
     * handleLogin
     *
     * @param  mixed $request
     * @return mixed
     */
    public function handleLogin($request, UserInterface $user): mixed
    {
        $data['email'] = $request->email;
        $user = $user->getWhere($data);
        if ($user->email_verified_at) {
            if ($user->roles[0]->name != RoleEnum::ADMIN->value) {
                if ($user->student ? $user->student->status == StatusEnum::ACTIVE->value : $user->company->status == StatusEnum::ACTIVE->value) {
                    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                        return redirect()->route('dashboard')->with('success', 'Berhasil Login.');
                    } else {
                        return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
                    }
                } else {
                    return redirect()->back()->withErrors('Anda tidak dapat login sekarang, tunggu admin mengkonfirmasi akun anda');
                }
            } else {
                if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect()->route('dashboard')->with('success', 'Berhasil Login.');
                } else {
                    return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
                }
            }
        } else {
            return redirect()->back()->withErrors('Harap Verifikasi Akun Anda Terlebih Dahulu');
        }
    }
}
