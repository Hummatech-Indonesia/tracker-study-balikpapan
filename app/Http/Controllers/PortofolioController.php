<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PhotoPortofolioInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Http\Requests\PortofolioRequest;
use App\Models\Portofolio;
use App\Services\PortofolioService;
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
        // return view('');
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
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  mixed $request
     * @param  mixed $portofolio
     * @return void
     */
    public function update(PortofolioRequest $request, Portofolio $portofolio)
    {
        $service = $this->service->store($request);
        $this->portofolio->update($portofolio->id, $request->validated());
        $photoPortofolioes = $this->photoPortofolio->show($portofolio->id);
        foreach ($photoPortofolioes as $photoPortofolio) {
            $this->photoPortofolio->delete($photoPortofolio->id);
        }

        foreach ($service['photo'] as $photo) {
            $data['photo'] = $photo;
            $data['portofolio_id'] = $portofolio->id;
            $this->photoPortofolio->store($data);
        }
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * destroy
     *
     * @param  mixed $portofolio
     * @return void
     */
    public function destroy(Portofolio $portofolio)
    {
        $this->portofolio->delete($portofolio->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
