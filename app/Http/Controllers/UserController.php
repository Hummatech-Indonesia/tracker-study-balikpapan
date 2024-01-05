<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\UserHelper;
use App\Services\UserService;
use App\Http\Requests\UpdatePasswordRequest;
use App\Contracts\Interfaces\CompanyInterface;
use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Contracts\Interfaces\Auth\RegisterInterface;

class UserController extends Controller
{
    private RegisterInterface $user;
    private CompanyInterface $company;
    private UserService $service;

    public function __construct(RegisterInterface $user, CompanyInterface $company, UserService $service)
    {
        $this->user = $user;
        $this->company = $company;
        $this->service = $service;
    }

    public function company()
    {
        return view('company.profile');
    }

    /**
     * updateProfile
     *
     * @return void
     */
    public function updateCompany(UpdateCompanyProfileRequest $request, User $user)
    {
        $this->user->update($user->id, $request->validated());
        $this->company->update($user->company->id, $request->validated());

        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * updateProfile
     *
     * @return void
     */
    public function updateProfile(UpdateProfileRequest $request)
    {
        $this->user->update(UserHelper::getUserId(), $this->service->updateProfile($request));

        return redirect()->back()->with('success', trans('alert.profile_updated'));
    }

    /**
     * updatePassword
     *
     * @param  mixed $request
     * @return void
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $this->user->update(UserHelper::getUserId(), $data);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }
}
