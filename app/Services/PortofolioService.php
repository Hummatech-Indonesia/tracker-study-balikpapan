<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\PortofolioRequest;
use App\Traits\UploadTrait;

class PortofolioService
{
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store($request): array
    {
        $data = $request->validated();
        $photoes = [];
        foreach ($request->file('photo') as $photo) {
            $uploadedPhoto = $this->upload(UploadDiskEnum::PHOTOPORTOFOLIO->value, $photo);
            $photoes[] = $uploadedPhoto;
        }
        $data['photo'] = $photoes;
        return $data;
    }
}
