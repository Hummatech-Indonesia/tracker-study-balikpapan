<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\TeacherGalleryInterface;
use App\Http\Requests\TeacherGalleryRequest;
use App\Http\Requests\TeacherGalleryUpdateRequest;
use App\Models\Teacher;
use App\Models\TeacherGallery;
use App\Services\TeacherGalleryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeacherGalleryController extends Controller
{
    private TeacherGalleryInterface $teacherGallery;
    private TeacherGalleryService $service;
    public function __construct(TeacherGalleryInterface $teacherGalleryInterface, TeacherGalleryService $teacherGalleryService)
    {
        $this->service = $teacherGalleryService;
        $this->teacherGallery = $teacherGalleryInterface;
    }

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $data = $this->teacherGallery->get();
        return view('', compact('data'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(TeacherGalleryRequest $request): RedirectResponse
    {
        $this->teacherGallery->store($this->service->store($request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * update
     *
     * @param  mixed $teacherGallery
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function update(TeacherGallery $teacherGallery, TeacherGalleryUpdateRequest $request): RedirectResponse
    {
        $this->teacherGallery->store($this->service->update($teacherGallery, $request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * destroy
     *
     * @param  mixed $teacherGallery
     * @return RedirectResponse
     */
    public function destroy(TeacherGallery $teacherGallery): RedirectResponse
    {
        $this->service->remove($teacherGallery->photo);
        $this->teacherGallery->delete($teacherGallery->id);
        return redirect()->back()->with('success', trans(''));
    }
}