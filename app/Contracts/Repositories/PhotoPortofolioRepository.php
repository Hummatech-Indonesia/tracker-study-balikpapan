<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PhotoPortofolioInterface;
use App\Models\PhotoPortofolio;

class PhotoPortofolioRepository extends BaseRepository implements PhotoPortofolioInterface
{
    public function __construct(PhotoPortofolio $photoPortofolio)
    {
        $this->model = $photoPortofolio;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
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
            ->where('portofolio_id', $id)
            ->get();
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
            ->findOrFail($id)->delete();
    }
}
