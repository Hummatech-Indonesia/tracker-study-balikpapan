<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SliderGalleryAlumniInterface;
use App\Models\SliderGalleryAlumni;

class SliderGalleryAlumniRepository extends BaseRepository implements SliderGalleryAlumniInterface
{
    public function __construct(SliderGalleryAlumni $sliderGalleryAlumni)
    {
        $this->model = $sliderGalleryAlumni;
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        foreach ($data['photos'] as $photo) {
            $this->model->query()
                ->create(['photo' => $photo]);
        }
        return $data;
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
     * update
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->show($id)
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
        return $this->show($id)
            ->delete();
    }
}
