<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\UserInterface;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
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

            ->get();
    }

    /**
     * getByRole
     *
     * @param  mixed $role
     * @return mixed
     */
    public function getByRole(array $role, Request $request): mixed
    {
        return $this->model->query()
            ->role($role)
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            })
            ->whereNot('email', 'staff@gmail.com')
            ->whereNot('email', 'admin@gmail.com')
            ->get();
    }

    /**
     * getWhere
     *
     * @param  mixed $data
     * @return mixed
     */
    public function getWhere(array $data): mixed
    {
        return $this->model->query()
            ->where('email', $data['email'])
            ->first();
    }
}
