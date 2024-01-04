<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\SliderGalleryAlumniRequest;
use App\Http\Requests\SliderGalleryAlumniUpdateRequest;
use App\Models\SliderGalleryAlumni;
use App\Traits\UploadTrait;

class SliderGalleryAlumniService
{
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(SliderGalleryAlumniRequest $request): array
    {
        $data = $request->validated();
        $photos = [];
        foreach ($request->file('photo') as $photo) {
            array_push($photos, $this->upload(UploadDiskEnum::SLIDERGALLERYALUMNI->value, $photo));
        }
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $sliderGalleryAlumni
     * @param  mixed $request
     * @return array
     */
    public function update(SliderGalleryAlumni $sliderGalleryAlumni, SliderGalleryAlumniUpdateRequest $request): array
    {
        $data = $request->validated();
        $oldPhoto = $sliderGalleryAlumni->photo;
        if ($request->hasFile('photo')) {
            $this->remove($oldPhoto);
            $oldPhoto = $this->upload(UploadDiskEnum::SLIDERGALLERYALUMNI->value, $request->file('photo'));
        }
        $data['photo'] = $oldPhoto;
        return $data;
    }
}
