<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Interfaces\RegencyInterface;

class RegencyController extends Controller
{
    private RegencyInterface $regency;

    public function __construct(RegencyInterface $regency)
    {
        $this->regency = $regency;
    }

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->regency->search($request);
        }
    }
}
