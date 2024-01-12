<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\LoginService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    private LoginService $loginService;

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
     * @return \Illuminate\Http\JsonResponse Returns a JSON response.
     */
    public function login(LoginRequest $request)
    {
        return $this->loginService->handleLogin($request);
    }

    /**
     * Handle user logout.
     *
     * This function is responsible for handling user logout requests. It deletes the current user's access token,
     * effectively logging the user out of the system.
     *
     * @return \Illuminate\Http\JsonResponse Returns a JSON response.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
