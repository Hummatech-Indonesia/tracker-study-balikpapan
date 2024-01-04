<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AlumniVideoGalleryInterface;
use App\Models\AlumniVideoGallery;

class AlumniVideoGalleryRepository extends BaseRepository implements AlumniVideoGalleryInterface
{
    public function __construct(AlumniVideoGallery $alumniVideoGallery)
    {
        $this->model = $alumniVideoGallery;
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
            ->create($data);
    }

    /**
     * getFirst
     *
     * @return mixed
     */
    public function getFirst(): mixed
    {
        return $this->model->query()
            ->first();
    }

    /**
     * update
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
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
