<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\TeacherVideoGalleryInterface;
use App\Models\TeacherVideoGallery;

class TeacherVideoGalleryRepository extends BaseRepository implements TeacherVideoGalleryInterface
{
    public function __construct(TeacherVideoGallery $teacherVideoGallery)
    {
        $this->model = $teacherVideoGallery;
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id);
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->updateOrCreate(['is_video'], $data);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->delete();
    }
}
