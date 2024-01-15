<?php

namespace App\Http\Resources;

use App\Enums\ActivityStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PieChartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $work = $this->whereHas('submitSurvey')->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::WORK->value)->count();
        $study = $this->whereHas('submitSurvey')->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::STUDY->value)->count();
        $notWork = $this->whereHas('submitSurvey')->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::NOTWORK->value)->count();
        $businnes = $this->whereHas('submitSurvey')->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::BUSSINESS->value)->count();
        return [
            'bekerja' => $work,
            'kuliah' => $study,
            'tidak_bekerja' => $notWork,
            'bisnis' => $businnes
        ];
    }
}
