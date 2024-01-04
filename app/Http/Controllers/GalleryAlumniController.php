<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\GalleryAlumniInterface;
use App\Contracts\Interfaces\SliderGalleryAlumniInterface;
use App\Http\Requests\GalleryAlumniRequest;
use App\Http\Requests\GalleryAlumniUpdateRequest;
use App\Models\GalleryAlumni;
use App\Services\GalleryAlumniService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryAlumniController extends Controller
{
    private GalleryAlumniInterface $galleryAlumni;
    private SliderGalleryAlumniInterface $sliderGalleryAlumni;
    private GalleryAlumniService $service;
    public function __construct(GalleryAlumniInterface $galleryAlumniInterface, GalleryAlumniService $galleryAlumniService, SliderGalleryAlumniInterface $sliderGalleryAlumniInterface)
    {
        $this->sliderGalleryAlumni = $sliderGalleryAlumniInterface;
        $this->galleryAlumni = $galleryAlumniInterface;
        $this->service = $$galleryAlumniService;
    }

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $galleryAlumnis = $this->galleryAlumni->get();
        $sliderGalleryAlumnis = $this->sliderGalleryAlumni->get();

        return view('admin.upload-alumni', compact('galleryAlumnis', 'sliderGalleryAlumnis'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(GalleryAlumniRequest $request): RedirectResponse
    {
        $this->galleryAlumni->store($this->service->store($request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * update
     *
     * @param  mixed $news
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function update(GalleryAlumni $gallery_alumni, GalleryAlumniUpdateRequest $request): RedirectResponse
    {
        $this->galleryAlumni->update($gallery_alumni->id, $this->service->update($gallery_alumni, $request));
        return redirect()->back()->with('success', trans(''));
    }

    /**
     * destroy
     *
     * @param  mixed $news
     * @return RedirectResponse
     */
    public function destroy(GalleryAlumni $gallery_alumni): RedirectResponse
    {
        $this->service->remove($gallery_alumni->photo);
        $this->galleryAlumni->delete($gallery_alumni->id);
        return redirect()->back()->with('success', trans(''));
    }
}