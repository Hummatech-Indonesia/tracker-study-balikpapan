<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\TeacherVideoGalleryRequest;
use App\Http\Requests\TeacherVideoGalleryUpdateRequest;
use App\Models\TeacherVideoGallery;
use App\Traits\UploadTrait;

class TeacherVideoGalleryService {
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(TeacherVideoGalleryRequest $request): array
    {
        $data = $request->validated();
        $data['video'] = $this->upload(UploadDiskEnum::TEACHERVIDEOGALLERY->value, $request->file('video'));
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $teacherVideoGallery
     * @param  mixed $request
     * @return array
     */
    public function update(TeacherVideoGallery $teacherVideoGallery, TeacherVideoGalleryUpdateRequest $request): array
    {
        $data = $request->validated();
        $oldVideo = $teacherVideoGallery->video;
        if ($request->hasFile('video')) {
            $this->remove($oldVideo);
            $oldVideo = $this->upload(UploadDiskEnum::TEACHERVIDEOGALLERY->value, $request->file('video'));
        }
        $data['video'] = $oldVideo;
        return $data;
    }
}
