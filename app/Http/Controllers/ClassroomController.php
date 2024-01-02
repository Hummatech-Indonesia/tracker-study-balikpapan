<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ClassroomInterface;
use App\Http\Requests\ClassroomRequest;
use App\Models\Classroom;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    private ClassroomInterface $classroom;
    public function __construct(ClassroomInterface $classroom)
    {
        $this->classroom = $classroom;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $classrooms = $this->classroom->search($request);
        return view('admin.add-class', ['classrooms' => $classrooms]);
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
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $this->classroom->update($classroom->id, $request->validated());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $this->classroom->delete($classroom->id);
        return redirect()->back();
    }
}
