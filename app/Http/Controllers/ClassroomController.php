<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ClassroomRequest;
use App\Contracts\Interfaces\MajorInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\SchoolYearInterface;

class ClassroomController extends Controller
{
    private ClassroomInterface $classroom;
    private SchoolYearInterface $schoolYear;
    private MajorInterface $major;

    public function __construct(ClassroomInterface $classroom, SchoolYearInterface $schoolYear, MajorInterface $major)
    {
        $this->classroom = $classroom;
        $this->schoolYear = $schoolYear;
        $this->major = $major;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $classrooms = $this->classroom->search($request);
        $schoolYears = $this->schoolYear->get();
        $majors = $this->major->get();
        return view('admin.add-class', ['classrooms' => $classrooms, 'schoolYears' => $schoolYears, 'majors' => $majors]);
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
    public function store(ClassroomRequest $request)
    {
        $this->classroom->store($request->validated());
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
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $this->classroom->update($classroom->id, $request->validated());
        return redirect()->back()->with('success',trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $this->classroom->delete($classroom->id);
        return redirect()->back()->with('success',trans('alert.delete_success'));
    }
}
