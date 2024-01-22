<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\UserInterface;
use App\Enums\RoleEnum;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\AccountUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{

    private UserInterface $user;

    public function __construct(
        UserInterface $user
    ) {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $accounts = $this->user->getByRole(RoleEnum::ADMIN->value, $request);

        return view('admin.add-account', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountRequest $request)
    {
        $validated = $request->validated();
        $validated['email_verified_at'] = now();

        $user = $this->user->store($validated);
        $user->assignRole(RoleEnum::ADMIN->value);

        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $data['password'] ? '' : $data['password'] = $user->password;
        $this->user->update($user->id, $data);

        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->user->delete($user->id);

        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
