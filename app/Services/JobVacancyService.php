<?php

namespace App\Services;

use App\Http\Requests\JobVacancyRequest;

class JobVacancyService
{
    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(JobVacancyRequest $request): array
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        return $data;
    }
}
