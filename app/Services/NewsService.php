<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use App\Traits\UploadTrait;

class NewsService
{
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(NewsRequest $request): array
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->upload(UploadDiskEnum::THUMBNAIL->value, $request->file('thumbnail'));
        return $data;
    }

    /**
     * update
     *
     * @param  mixed $news
     * @param  mixed $request
     * @return array
     */
    public function update(News $news, NewsUpdateRequest $request): array
    {
        $data = $request->validated();
        $oldThumbnail = $news->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $oldThumbnail = $this->upload(UploadDiskEnum::THUMBNAIL->value, $request->file('thumbnail'));
        }
        $data['thumbnail'] = $oldThumbnail;
        return $data;
    }
}
