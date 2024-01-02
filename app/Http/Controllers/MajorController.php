<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\MajorInterface;
use App\Http\Requests\NameOnlyRequest;
use App\Models\Major;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    private MajorInterface $major;
    public function __construct(MajorInterface $major)
    {
        $this->major = $major;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $majors = $this->major->search($request);
        return view('admin.add-major', ['majors' => $majors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NameOnlyRequest $request)
    {
        $this->major->store($request->validated());
        return redirect()->back()->with('success', trans('alert.add_success'));
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
    public function update(NameOnlyRequest $request, Major $major)
    {
        $this->major->update($major->id, $request->validated());
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $this->major->delete($major->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
