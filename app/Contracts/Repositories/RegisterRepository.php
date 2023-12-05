<?php

namespace App\Contracts\Repositories;

use App\Models\User;
use App\Contracts\Repositories\BaseRepository;
use App\Contracts\Interfaces\RegisterInterface;
use App\Contracts\Repositories\RegisterRepository;

class RegisterRepository extends BaseRepository implements RegisterInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        $user = $this->model->query()
            ->create($data);
        return $user;
    }
}
