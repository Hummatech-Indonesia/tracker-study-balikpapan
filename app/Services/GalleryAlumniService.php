<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\GalleryAlumniRequest;
use App\Http\Requests\GalleryAlumniUpdateRequest;
use App\Models\GalleryAlumni;
use App\Traits\UploadTrait;

class GalleryAlumniService
{
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(GalleryAlumniRequest $request): array
    {
        $data = $request->validated();
        $photos = [];
        foreach($data['photo'] as $photo) {
            array_push($photos, $this->upload(UploadDiskEnum::GALLERYALUMNI->value, $photo->file('photo')));
        }
        $data['photos'] = $photos;
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $galleryAlumni
     * @param  mixed $request
     * @return array
     */
    public function update(GalleryAlumni $galleryAlumni, GalleryAlumniUpdateRequest $request): array
    {
        $data = $request->validated();
        $oldPhoto = $galleryAlumni->photo;
        if ($request->hasFile('photo')) {
            $this->remove($oldPhoto);
            $oldPhoto = $this->upload(UploadDiskEnum::GALLERYALUMNI->value, $request->file('photo'));
        }
        $data['photo'] = $oldPhoto;
        return $data;
    }
}
