<?php

namespace App\Contracts\Repositories;

use App\Models\Regency;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\RegencyInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Enums\StatusEnum;

class RegencyRepository extends BaseRepository implements RegencyInterface
{
    public function __construct(Regency $regency)
    {
        $this->model = $regency;
    }

    /**
     * percentageOfAlumni
     *
     * @return mixed
     */
    public function percentageOfAlumni(): mixed
    {
        return $this->model->query()
            ->withCount('submitSurveys as nonactive_count', function ($query) {
                $query->whereRelation('student', 'status', '=', StatusEnum::NONACTIVE->value);
            })
            ->withCount('submitSurveys as all_count')
            ->take(5)
            ->orderByDesc('submit_surveys_count')
            ->get();
    }

    /**
     * Handle get data from models.
     *
     * @param request $request
     *
     * @return mixed
     */
    public function search(Request $request) : mixed
    {
        return $this->model->query()
        ->when($request->province,function($query) use ($request){
            $query->where('province_id',$request->province);
        })->get();
    }
}
