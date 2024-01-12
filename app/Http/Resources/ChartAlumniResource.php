<?php

namespace App\Http\Resources;

use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChartAlumniResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $count = 0;
        foreach ($this->classrooms as $classroom) {
            $count += $classroom->students->where('is_graduate', 0)->where('status', StatusEnum::ACTIVE->value)->count();
        }
        return [
            'name' => $this->name,
            'y' => $count,
            'drilldown' => $this->name,

        ];
    }
}
