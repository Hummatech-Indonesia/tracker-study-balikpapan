<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\TeacherGalleryRequest;
use App\Http\Requests\TeacherGalleryUpdateRequest;
use App\Models\TeacherGallery;
use App\Traits\UploadTrait;

class TeacherGalleryService
{
    use UploadTrait;
    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(TeacherGalleryRequest $request): array
    {
        $data = $request->validated();
        $data['photo'] = $this->upload(UploadDiskEnum::TEACHERGALLERY->value, $request->file('photo'));
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $teacherGallery
     * @param  mixed $request
     * @return array
     */
    public function update(TeacherGallery $teacherGallery, TeacherGalleryUpdateRequest $request): array
    {
        $data = $request->validated();
        $photo = $teacherGallery->photo;
        if ($request->hasFile('photo')) {
            $this->remove($photo);
            $photo = $this->upload(UploadDiskEnum::TEACHERGALLERY->value, $request->file('photo'));
        }
        $data['photo'] = $photo;
        return $data;
    }
}
