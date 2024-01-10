<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\SendEmailResetPasswordRequest;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\View\View;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    private UserInterface $user;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        return $this->user = $user;
    }

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * sendEmailResetPassword
     *
     * @param  mixed $request
     * @return void
     */
    public function sendEmailForgotPassword(SendEmailResetPasswordRequest $request)
    {
        $data = $request->validated();
        $user = $this->user->getWhere($data);
        Mail::to($request->email)->send(new ForgotPasswordMail(['email' => $data['email'], 'name' => $user->name, 'id' => $user->id]));
        return redirect()->back()->with('success', trans('auth.send_email_forgot_password'));
    }

    /**
     * resetPassword
     *
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function resetPassword(ResetPasswordRequest $request, User $user)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $this->user->update($user->id, $data);
        return redirect()->route('login')->with('success', trans('auth.reset_password_success'));
    }

    /**
     * viewResetPassword
     *
     * @param  mixed $user
     * @return View
     */
    public function viewResetPassword(User $user): View
    {
        $userId = $user->id;
        return view('auth.reset-password', compact('userId'));
    }
}
