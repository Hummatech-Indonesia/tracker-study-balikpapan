<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Http\Requests\PortofolioRequest;
use App\Models\News;
use App\Models\Portofolio;
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
    public function store(PortofolioRequest $request): array
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
