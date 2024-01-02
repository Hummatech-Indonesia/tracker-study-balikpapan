<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SchoolYearInterface;
use App\Http\Requests\NameOnlyRequest;
use App\Http\Requests\SchoolYearRequest;
use App\Models\SchoolYear;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    private SchoolYearInterface $schoolYear;
    public function __construct(SchoolYearInterface $schoolYear)
    {
        $this->schoolYear = $schoolYear;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $schoolYear = $this->schoolYear->search($request);
        return view('admin.add-school-year', ['schoolYear' => $schoolYear]);
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
        $this->schoolYear->store($request->validated());
        return redirect()->back();
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
    public function update(NameOnlyRequest $request, SchoolYear $schoolYear)
    {
        $this->schoolYear->update($schoolYear->id, $request->validated());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolYear $schoolYear)
    {
        $this->schoolYear->delete($schoolYear->id);
        return redirect()->back();
    }
}
