<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PortofolioInterface;
use App\Enums\RoleEnum;

class HomeController extends Controller
{

    private PortofolioInterface $portofolio;

    public function __construct(PortofolioInterface $portofolio)
    {
        $this->portofolio = $portofolio;
    }

    /**
     *
     */
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {

        $role = auth()->user()->roles[0]->name;

        switch ($role) {
            case RoleEnum::ADMIN->value:
                return view('admin.index');
                break;
            case RoleEnum::STUDENT->value:
                $countPortofolio = $this->portofolio->countPortofolio();
                return view('student.dashboard', compact('countPortofolio'));
                break;
            case RoleEnum::ALUMNI->value:
                return view('alumni.index');
                break;
            case RoleEnum::COMPANY->value:
                return view('company.index');
                break;
        }
    }
}
