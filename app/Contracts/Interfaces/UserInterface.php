<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetWhereInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use Illuminate\Http\Request;

interface UserInterface extends GetInterface, StoreInterface, SearchInterface, DeleteInterface, UpdateInterface, ShowInterface, GetWhereInterface
{
    /**
     * getByRole
     *
     * @param  mixed $role
     * @return mixed
     */
    public function getByRole(string $role, Request $request): mixed;
}
