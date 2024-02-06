<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\RegisterCompanyRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\RegisterService;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    private RegisterService $service;
    private RegisterInterface $register;
    private StudentInterface $student;
    private CompanyInterface $company;
    private ClassroomInterface $classroom;
    private SchoolYearInterface $schoolYear;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterService $service, RegisterInterface $register, StudentInterface $student, CompanyInterface $company, ClassroomInterface $classroom, SchoolYearInterface $schoolYear)
    {
        $this->service = $service;
        $this->schoolYear = $schoolYear;
        $this->register = $register;
        $this->student = $student;
        $this->company = $company;
        $this->classroom = $classroom;
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return View
     */
    public function showRegistrationForm(): View
    {
        $title = trans('title.register');
        $classrooms = $this->classroom->get();
        $schoolYears = $this->schoolYear->get();
        return view('auth.register', compact('title', 'classrooms', 'schoolYears'));
    }


    /**
     * Handle school registration form
     *
     * @param RegisterRequest $request
     *
     * @return RedirectResponse
     */

    public function register(RegisterRequest $request)
    {
        $this->service->handleRegistration($request, $this->register, $this->student);

        return redirect()->back()->with('success', trans('auth.register_success'));
    }

    /**
     * registerCompany
     *
     * @param  mixed $request
     * @return void
     */
    public function registerCompany(RegisterCompanyRequest $request)
    {
        $this->service->handleRegistrationCompany($request, $this->register, $this->company);
        return redirect()->back()->with('success', trans('auth.register_success'));
    }

    /**
     * registerCompany
     *
     * @param  mixed $request
     * @return void
     */
    public function registerCompanyView()
    {
        return view('company.register');
    }
}
