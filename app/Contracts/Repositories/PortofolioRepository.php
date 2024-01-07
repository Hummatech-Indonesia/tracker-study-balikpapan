<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PortofolioInterface;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioRepository extends BaseRepository implements PortofolioInterface
{
    public function __construct(Portofolio $portofolio)
    {
        $this->model = $portofolio;
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
        $portofolio = $this->model->query()->create($data);

        foreach ($data['photo'] as $photo) {
            $data['photo'] = $photo;
            $portofolio->photoPortofolios()->create($data);
        }

        return $portofolio;
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
        return $this->show($id)->update($data);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->show($id)->delete($id);
    }

    /**
     * search
     *
     * @param  mixed $request
     * @return mixed
     */
    public function search(Request $request): mixed
    {
        return $this->model->query()
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            })
            ->get();
    }
}
