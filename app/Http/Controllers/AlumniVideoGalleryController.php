<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AlumniVideoGalleryInterface;
use App\Http\Requests\AlumniVideoGalleryRequest;
use App\Models\AlumniVideoGallery;
use App\Services\AlumniVideoGalleryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AlumniVideoGalleryController extends Controller
{
    private AlumniVideoGalleryService $service;
    private AlumniVideoGalleryInterface $alumniVideoGallery;
    public function __construct(AlumniVideoGalleryInterface $alumniVideoGalleryInterface, AlumniVideoGalleryService $alumniVideoGalleryService)
    {
        $this->service = $alumniVideoGalleryService;
        $this->alumniVideoGallery = $alumniVideoGalleryInterface;
    }

    public function store(AlumniVideoGalleryRequest $request): RedirectResponse
    {
        $this->alumniVideoGallery->store($this->service->store($request));
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * destroy
     *
     * @param  mixed $teacherVideoGallery
     * @return RedirectResponse
     */
    public function destroy(AlumniVideoGallery $alumni_video_gallery): RedirectResponse
    {
        $this->service->remove($alumni_video_gallery->video);
        $this->alumniVideoGallery->delete($alumni_video_gallery->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
