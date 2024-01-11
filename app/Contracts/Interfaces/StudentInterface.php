<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\WhereInInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface StudentInterface extends CustomPaginationInterface, StoreInterface, UpdateInterface, ShowInterface
{
    /**
     * studentNonactive
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function studentNonactive(Request $request, int $pagination = 10): LengthAwarePaginator;


    /**
     * studentClassroom
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function studentClassroom(Request $request, int $pagination = 10): LengthAwarePaginator;

    /**
     * count
     *
     * @param  mixed $data
     * @return int
     */
    public function countStudent(?array $data): int;
    /**
     * countAlumni
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumni(?array $data): int;

    /**
     * updateSelect
     *
     * @param  mixed $data
     * @param  mixed $select
     * @return mixed
     */
    public function updateSelect(array $data, array $select): mixed;


    /**
     * updateBasic
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function updateBasic(mixed $id, array $data): mixed;

    /**
     * chartAlumni
     *
     * @return mixed
     */
    public function chartAlumni(): mixed;
}
