<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use App\Models\User;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    private UserInterface $user;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * verify
     *
     * @param  mixed $user
     * @return void
     */
    public function verify(User $user)
    {
        $this->user->update($user->id, ['email_verified_at' => now()->format('Y-m-d H:i:s')]);
        return redirect()->route('login')->with('success', 'Verifikasi akun berhasil');
    }
}
