<?php

namespace App\Contracts\Repositories;

use Carbon\Carbon;
use App\Models\News;
use App\Contracts\Interfaces\NewsInterface;

class NewsRepository extends BaseRepository implements NewsInterface
{
    public function __construct(News $news)
    {
        $this->model = $news;
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
        return $this->model->query()
            ->create($data);
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

    /**
     * getByMonthNow
     *
     * @return mixed
     */
    public function getByMonthNow(): mixed
    {
        $now = Carbon::now();

        return $this->model->query()
            ->whereYear('created_at', $now->year)
            ->whereMonth('created_at', $now->month)
            ->get();
    }


    /**
     * getOneLatest
     *
     * @return mixed
     */
    public function getOneLatest() : mixed
    {
        return $this->model->query()
        ->latest()
        ->first();
    }

    /**
     * getByLatest
     *
     * @return mixed
     */
    public function getByLatest() : mixed
    {
        return $this->model->query()
        ->latest()
        ->take(6)
        ->get();
    }
}
