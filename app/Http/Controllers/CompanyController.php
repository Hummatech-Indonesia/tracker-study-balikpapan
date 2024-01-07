<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CompanyInterface;
use App\Enums\StatusEnum;
use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    private CompanyInterface $company;
    public function __construct(CompanyInterface $company)
    {
        $this->company = $company;
    }
    /**
     * verification
     *
     * @param  mixed $company
     * @return void
     */
    public function approve(Company $company)
    {
        $this->company->update($company->id, ['status' => StatusEnum::ACTIVE->value]);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * reject
     *
     * @param  mixed $company
     * @return void
     */
    public function reject(Company $company)
    {
        $this->company->update($company->id, ['status' => StatusEnum::REJECT->value]);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
        $companies = $this->company->search($request);
        return view('admin.verify-company', ['companies' => $companies]);
    }
}
