<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\LoginService;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * Handle user login.
     *
     * This function is responsible for handling user login requests.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request The incoming login request.
     */
    public function login(LoginRequest $request)
    {
        $this->loginService->handleLogin($request);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


}
