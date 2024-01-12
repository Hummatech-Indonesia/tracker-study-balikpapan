<?php

namespace App\Contracts\Repositories;

use App\Models\SubmitSurvey;
use App\Enums\ActivityStatusEnum;
use App\Contracts\Interfaces\SubmitSurveyInterface;

class SubmitSurveyRepository extends BaseRepository implements SubmitSurveyInterface
{
    public function __construct(SubmitSurvey $submitSurvey)
    {
        $this->model = $submitSurvey;
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
            ->updateOrCreate([
                'student_id' => $data['student_id'],
                'survey_id' => $data['survey_id'],
            ], $data);
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
        return $this->show($id)
            ->update($data);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->show($id)
            ->delete();
    }

    /**
     * getByStudent
     *
     * @param  mixed $studentId
     * @return mixed
     */
    public function getByStudent(mixed $studentId): mixed
    {
        return $this->model->query()
            ->where('student_id', $studentId)
            ->first();
    }

    /**
     * countStudy
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countStudy(mixed $surveyId): mixed
    {
        return $this->model->query()
            ->where('survey_id', $surveyId)
            ->where('current_activity', 'study')
            ->count();
    }

    /**
     * countWork
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countWork(mixed $surveyId): mixed
    {
        return $this->model->query()
        ->where('survey_id', $surveyId)
        ->where('current_activity', [ActivityStatusEnum::WORK->value])
        ->count();
    }

    /**
     * countBussiness
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countBussiness(mixed $surveyId): mixed
    {
        return $this->model->query()
        ->where('survey_id', $surveyId)
        ->where('current_activity', [ActivityStatusEnum::BUSSINESS->value])
        ->count();
    }

    /**
     * countNotWork
     *
     * @param  mixed $surveyId
     * @return mixed
     */
    public function countNotWork(mixed $surveyId): mixed
    {
        return $this->model->query()
        ->where('survey_id', $surveyId)
        ->where('current_activity', [ActivityStatusEnum::NOTWORK->value])
        ->count();
    }

}
