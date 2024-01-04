<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\UploadAlumniInterface;
use App\Models\UploadAlumni;

class UploadAlumniRepository extends BaseRepository implements UploadAlumniInterface
{
    public function __construct(UploadAlumni $uploadalumni)
    {
        $this->model = $uploadalumni;
    }
    public function get(): mixed
    {
        
    }
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }
}