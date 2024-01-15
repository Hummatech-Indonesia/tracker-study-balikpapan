<?php

namespace App\Contracts\Repositories;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Interfaces\PortofolioInterface;

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
            ->orderByDesc('created_at')
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
            ->where('student_id', auth()->user()->student->id)
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            })
            ->when($request->userId, function ($query) use ($request) {
                $query->where('student_id', $request->userId);
            })
            ->get();
    }
    public function countPortofolio(): string
    {
        $userId = Auth::user()->student->id;

        return $this->model->query()
            ->where('student_id', $userId)
            ->count();
    }

    /**
     * getPortofolioByStudent
     *
     * @param  mixed $id
     * @return mixed
     */
    public function getPortofolioByStudent(mixed $id): mixed
    {
        return $this->model->query()
            ->where('student_id', $id)
            ->get();
    }

    public function getLatestPortofolio(mixed $id): mixed
    {
        return $this->model->query()
        ->where('student_id',$id)
        ->latest()
        ->take(2)
        ->get();
    }
}
