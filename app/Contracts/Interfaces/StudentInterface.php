<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface StudentInterface extends CustomPaginationInterface, StoreInterface, UpdateInterface, ShowInterface, GetInterface
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
     * studentNonactive
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function alumniNonactive(Request $request, int $pagination = 10): LengthAwarePaginator;


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
     * countAlumniSubmitSurvey
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniSubmitSurvey(?array $data): int;

    /**
     * countAlumniNotSubmitSurvey
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniNotSubmitSurvey(?array $data): int;

    /**
     * updateSelect
     *
     * @param  mixed $data
     * @param  mixed $select
     * @return mixed
     */
    public function updateSelect(array $data, array $select): mixed;

    /**
     * verificationSelect
     *
     * @param  mixed $data
     * @param  mixed $select
     * @return mixed
     */
    public function verificationSelect(array $data, array $select): mixed;


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

    /**
     * countAlumniKuliah
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniStudy(?array $data): int;

    /**
     * countAlumniBusinnes
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniBusinnes(?array $data): int;

    /**
     * countAlumniWork
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniWork(?array $data): int;

    /**
     * countAlumniNotWork
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniNotWork(?array $data): int;
}
