<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\AlumniVideoGalleryRequest;
use App\Http\Requests\AlumniVideoGalleryUpdateRequest;
use App\Models\AlumniVideoGallery;
use App\Traits\UploadTrait;

class AlumniVideoGalleryService {
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(AlumniVideoGalleryRequest $request): array
    {
        $data = $request->validated();
        $data['video'] = $this->upload(UploadDiskEnum::ALUMNIVIDEOGALLERY->value, $request->file('video'));
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $teacherVideoGallery
     * @param  mixed $request
     * @return array
     */
    public function update(AlumniVideoGallery $alumniVideoGallery, AlumniVideoGalleryUpdateRequest $request): array
    {
        $data = $request->validated();
        $oldVideo = $alumniVideoGallery->video;
        if ($request->hasFile('video')) {
            $this->remove($oldVideo);
            $oldVideo = $this->upload(UploadDiskEnum::ALUMNIVIDEOGALLERY->value, $request->file('video'));
        }
        $data['video'] = $oldVideo;
        return $data;
    }
}
