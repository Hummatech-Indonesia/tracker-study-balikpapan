<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Contracts\Interfaces\UserInterface;
use App\Http\Requests\AccountUpdateRequest;

class AccountController extends Controller
{

    private UserInterface $user;

    public function __construct(
        UserInterface $user
    )
    {
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $accounts = $this->user->getByRole(RoleEnum::ADMIN->value);

        return view('admin.add-account',compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountRequest $request)
    {
        $user = $this->user->store($request->validated());
        $user->assignRole(RoleEnum::ADMIN->value);

        return redirect()->back()->with('success',trans('alert.add_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $data['password'] ? '' : $data['password'] = $user->password;
        $this->user->update($user->id,$data);
        
        return redirect()->back()->with('success',trans('alert.add_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
