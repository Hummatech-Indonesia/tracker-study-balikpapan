<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SliderGalleryAlumniInterface;
use App\Http\Requests\SliderGalleryAlumniRequest;
use App\Http\Requests\SliderGalleryAlumniUpdateRequest;
use App\Models\SliderGalleryAlumni;
use App\Services\SliderGalleryAlumniService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SliderGalleryAlumniController extends Controller
{
    private SliderGalleryAlumniInterface $sliderGalleryAlumni;
    private SliderGalleryAlumniService $service;

    public function __construct(SliderGalleryAlumniInterface $sliderGalleryAlumniInterface, SliderGalleryAlumniService $sliderGalleryAlumniService)
    {
        $this->sliderGalleryAlumni = $sliderGalleryAlumniInterface;
        $this->service = $sliderGalleryAlumniService;
    }

    public function index(): View
    {
        $data = $this->sliderGalleryAlumni->get();
        return view('', compact('data'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(SliderGalleryAlumniRequest $request): RedirectResponse
    {
        $this->sliderGalleryAlumni->store($this->service->store($request));
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * update
     *
     * @param  mixed $news
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function update(SliderGalleryAlumni $slider_gallery_alumni, SliderGalleryAlumniUpdateRequest $request): RedirectResponse
    {
        $this->sliderGalleryAlumni->update($slider_gallery_alumni->id, $this->service->update($slider_gallery_alumni, $request));
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * destroy
     *
     * @param  mixed $news
     * @return RedirectResponse
     */
    public function destroy(SliderGalleryAlumni $slider_gallery_alumni): RedirectResponse
    {
        $this->service->remove($slider_gallery_alumni->photo);
        $this->sliderGalleryAlumni->delete($slider_gallery_alumni->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }
}
