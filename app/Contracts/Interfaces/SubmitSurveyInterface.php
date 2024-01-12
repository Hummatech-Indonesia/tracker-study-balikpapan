<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;

interface SubmitSurveyInterface extends GetInterface,StoreInterface, UpdateInterface,DeleteInterface
{
    /**
     * getByStudent
     *
     * @param  mixed $studentId
     * @return mixed
     */
    public function getByStudent(mixed $studentId) :mixed;

    /**
     * countStudy
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countStudy(mixed $surveyId) :mixed;

    /**
     * countWork
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countWork(mixed $surveyId) : mixed;

    /**
     * countNotWork
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countNotWork(mixed $surveyId) : mixed;

    /**
     * countBussiness
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countBussiness(mixed $surveyId) : mixed;

}
