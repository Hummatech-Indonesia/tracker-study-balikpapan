<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PortofolioInterface;

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
        
        switch($role){
            case 'admin':
                return view('admin.index');
                break;
            case 'student':
                $countPortofolio = $this->portofolio->countPortofolio();
                return view('student.dashboard',compact('countPortofolio'));
                break;
            case 'alumni':
                return view('alumni.index');
                break;
            case 'company':
                return view('company.index');
                break;
        }

        
    }
}
