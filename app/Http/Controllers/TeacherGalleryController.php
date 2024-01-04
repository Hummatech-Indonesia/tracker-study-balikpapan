<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\TeacherGallery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\TeacherGalleryService;
use Illuminate\Support\Facades\Redirect;
use App\Contracts\Interfaces\NewsInterface;
use App\Http\Requests\TeacherGalleryRequest;
use App\Http\Requests\TeacherGalleryUpdateRequest;
use App\Contracts\Interfaces\TeacherGalleryInterface;
use App\Contracts\Interfaces\TeacherVideoGalleryInterface;

class TeacherGalleryController extends Controller
{
    private TeacherVideoGalleryInterface $teacherVideo;
    private TeacherGalleryInterface $teacherGallery;
    private TeacherGalleryService $service;
    private NewsInterface $news;

    public function __construct(TeacherGalleryInterface $teacherGalleryInterface, TeacherGalleryService $teacherGalleryService, NewsInterface $news, TeacherVideoGalleryInterface $teacherVideo)
    {
        $this->service = $teacherGalleryService;
        $this->teacherGallery = $teacherGalleryInterface;
        $this->news = $news;
        $this->teacherVideo = $teacherVideo;
    }

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $data = $this->teacherGallery->get();
        return view('admin.teacher-gallery', compact('data'));
    }

    public function galery(): View
    {
        $teachers = $this->teacherGallery->get();
        $news = $this->news->getByLatest();
        $videoTeacher = $this->teacherVideo->getFirst();
        return view('galery-teacher', compact('teachers','news','videoTeacher'));
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
        return redirect()->back()->with('success', trans('alert.add_success'));
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
        $this->teacherGallery->update($teacherGallery->id, $this->service->update($teacherGallery, $request));
        return redirect()->back()->with('success', trans('alert.update_success'));
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
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
