<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PhotoPortofolioInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Http\Requests\PortofolioRequest;
use App\Http\Requests\PortofolioUpdateRequest;
use App\Models\Portofolio;
use App\Models\Student;
use App\Services\PortofolioService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{

    private PortofolioInterface $portofolio;
    private PhotoPortofolioInterface $photoPortofolio;
    private PortofolioService $service;

    public function __construct(PortofolioInterface $portofolio, PortofolioService $service, PhotoPortofolioInterface $photoPortofolio)
    {
        $this->photoPortofolio = $photoPortofolio;
        $this->service = $service;
        $this->portofolio = $portofolio;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->merge(['userId' => auth()->user()->student->id]);
        $portofolios = $this->portofolio->search($request);
        return view('student.portofolio', ['portofolios' => $portofolios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  mixed $request
     * @return void
     */
    public function store(PortofolioRequest $request)
    {
        $service = $this->service->store($request);
        $this->portofolio->store($service);
        return redirect()->route('portofolio')->with('success', trans('alert.add_success'));
    }

    /**
     * show
     *
     * @param  mixed $portofolio
     * @return View
     */
    public function show(Portofolio $portofolio): View
    {
        return view('student.detail-portofolio', compact('portofolio'));
    }
    /**
     * edit
     *
     * @param  mixed $portofolio
     * @return View
     */
    public function edit(Portofolio $portofolio): View
    {
        $photoes = [];
        foreach ($portofolio->photoPortofolios as $photoPortofolio) {
            $photoes[] = asset('storage/' . $photoPortofolio->photo);
        }
        return view('student.edit-portofolio', ['portofolio' => $portofolio, 'photoes' => $photoes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  mixed $request
     * @param  mixed $portofolio
     * @return void
     */
    public function update(PortofolioUpdateRequest $request, Portofolio $portofolio)
    {
        $data = $request->validated();
        $this->portofolio->update($portofolio->id, $request->validated());
        $photoPortofolioes = $this->photoPortofolio->show($portofolio->id);
        if (isset($data['photo'])) {
            $service = $this->service->store($request);
            foreach ($service['photo'] as $photo) {
                $data['photo'] = $photo;
                $data['portofolio_id'] = $portofolio->id;
                $this->photoPortofolio->store($data);
            }
            foreach ($photoPortofolioes as $photoPortofolio) {
                $this->photoPortofolio->delete($photoPortofolio->id);
                $this->service->remove($photoPortofolio->photo);
            }
        }
        return redirect()->route('portofolio')->with('success', trans('alert.update_success'));
    }

    /**
     * destroy
     *
     * @param  mixed $portofolio
     * @return void
     */
    public function destroy(Portofolio $portofolio)
    {
        foreach ($portofolio->photoPortofolios as $photoPortofolio) {
            $this->service->remove($photoPortofolio->photo);
        }
        $this->portofolio->delete($portofolio->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }

    public function detail(Student $student)
    {
        $portofolios = $this->portofolio->getPortofolioByStudent($student->id);
        return view('company.portofolio', compact('portofolios'));
    }
}
