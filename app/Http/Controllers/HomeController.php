<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

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
                return view('student.dashboard');
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
