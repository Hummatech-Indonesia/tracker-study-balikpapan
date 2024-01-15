<?php

namespace App\Http\Resources;

use App\Enums\ApplicantStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DashboardCompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $jumlah_pelamar = 0;
        $pelamar_diterima = 0;
        $pelamar_ditolak = 0;
        foreach ($this->jobVacancies as $jobVacancy) {
            $jumlah_pelamar += $jobVacancy->applyJobVacancy->count();
            $pelamar_diterima += $jobVacancy->applyJobVacancy->where('status', ApplicantStatusEnum::ACCEPTED->value)->count();
            $pelamar_ditolak += $jobVacancy->applyJobVacancy->where('status', ApplicantStatusEnum::REJECTED->value)->count();
        }
        return [
            'lowongan_dibuat' => $this->jobVacancies->count(),
            'jumlah_pelamar' => $jumlah_pelamar,
            'pelamar_diterima' => $pelamar_diterima,
            'pelamar_ditolak' => $pelamar_ditolak,
        ];
    }
}
