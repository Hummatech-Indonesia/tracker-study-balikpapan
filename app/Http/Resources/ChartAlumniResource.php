<?php

namespace App\Http\Resources;

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
            $count += $classroom->students->count();
        }
        return [
            'name' => $this->name,
            'y' => $count,
            'drilldown' => $this->name,

        ];
    }
}
