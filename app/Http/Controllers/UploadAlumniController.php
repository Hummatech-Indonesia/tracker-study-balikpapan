<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\UploadAlumniInterface;
use App\Models\UploadAlumni;
use Illuminate\Http\Request;

class UploadAlumniController extends Controller
{
    private UploadAlumniInterface $uploadalumni ;

    public function __construct(UploadAlumniInterface $uploadalumni)
    {
        $this->uploadalumni = $uploadalumni;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $this->uploadalumni->store($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(UploadAlumni $uploadAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UploadAlumni $uploadAlumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UploadAlumni $uploadAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UploadAlumni $uploadAlumni)
    {
        //
    }
}
