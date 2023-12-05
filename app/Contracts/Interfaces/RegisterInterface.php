<?php

namespace App\Contracts\Interfaces;

interface RegisterInterface
{
    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function storeRegister(array $data): void;
}
