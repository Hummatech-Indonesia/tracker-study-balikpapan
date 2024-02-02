<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CompanyInterface;
use App\Enums\StatusEnum;
use App\Http\Requests\SelectChangeUpdateRequest;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
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
        Mail::to($company->user->email)->send(new RegistrationMail(['email' => $company->user->email, 'user' => $company->user->name, 'id' => $company->user->id]));

        return redirect()->back()->with('success', 'Berhasil Menyetujui Perusahaan ' . $company->user->name);
    }
    /**
     * approveAll
     *
     * @param  mixed $request
     * @return void
     */
    public function approveAll(SelectChangeUpdateRequest $request)
    {
        $select = $request->validated();
        $data['status'] = StatusEnum::ACTIVE->value;
        $this->company->verificationSelect($data, $select['select']);
        return redirect()->back()->with('success', 'Berhasil Menyetujui Student');
    }
    /**
     * rejectAll
     *
     * @param  mixed $request
     * @return void
     */
    public function rejectAll(SelectChangeUpdateRequest $request)
    {
        $select = $request->validated();
        $data['status'] = StatusEnum::REJECT->value;
        $this->company->verificationSelect($data, $select['select']);
        return redirect()->back()->with('success', 'Berhasil Menyetujui Student');
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
        return redirect()->back()->with('success', 'Berhasil Menolak Perusahaan ' . $company->user->name);
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

    /**
     * company
     *
     * @param  mixed $request
     * @return View
     */
    public function company(Request $request): View
    {
        $companies = $this->company->customPaginate($request, 10);
        return view('admin.company', ['companies' => $companies]);
    }
}
