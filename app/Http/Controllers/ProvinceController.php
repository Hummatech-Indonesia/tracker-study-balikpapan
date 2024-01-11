<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Interfaces\ProvinceInterface;

class ProvinceController extends Controller
{
    private ProvinceInterface $province;

    public function __construct(ProvinceInterface $province)
    {
        $this->province = $province;
    }

    public function index()
    {
        if (request()->ajax()) {
            return $this->province->get();
        }
    }
}
