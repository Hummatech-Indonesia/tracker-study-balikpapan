<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\TeacherVideoGalleryInterface;
use App\Http\Requests\TeacherVideoGalleryRequest;
use App\Http\Requests\TeacherVideoGalleryUpdateRequest;
use App\Models\TeacherVideoGallery;
use App\Services\TeacherVideoGalleryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeacherVideoGalleryController extends Controller
{
    private TeacherVideoGalleryInterface $teacherVideoGallery;
    private TeacherVideoGalleryService $service;
    public function __construct(TeacherVideoGalleryInterface $teacherVideoGalleryInterface, TeacherVideoGalleryService $teacherVideoGalleryService)
    {
        $this->service = $teacherVideoGalleryService;
        $this->teacherVideoGallery = $teacherVideoGalleryInterface;
    }

    public function store(TeacherVideoGalleryRequest $request): RedirectResponse
    {
        $this->teacherVideoGallery->store($this->service->store($request));
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    public function update(TeacherVideoGallery $teacher_video_gallery, TeacherVideoGalleryUpdateRequest $request)
    {
        $this->teacherVideoGallery->update($teacher_video_gallery->id, $this->service->update($teacher_video_gallery, $request));
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * destroy
     *
     * @param  mixed $teacherVideoGallery
     * @return RedirectResponse
     */
    public function destroy(TeacherVideoGallery $teacherVideoGallery): RedirectResponse
    {
        $this->service->remove($teacherVideoGallery->video);
        $this->teacherVideoGallery->delete($teacherVideoGallery->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}