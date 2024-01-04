<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\LoginRequest as RequestsLoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\LoginService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login(RequestsLoginRequest $request)
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
            auth()->logout();
            return to_route('index');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
