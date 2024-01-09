<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface UserInterface extends GetInterface, StoreInterface, SearchInterface, DeleteInterface, UpdateInterface, ShowInterface
{    
    /**
     * getByRole
     *
     * @param  mixed $role
     * @return mixed
     */
    public function getByRole(string $role) : mixed;
}
