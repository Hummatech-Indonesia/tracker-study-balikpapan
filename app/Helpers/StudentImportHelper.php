<?php

namespace App\Helpers;

use App\Models\User;

class StudentImportHelper
{
    /**
     * Handle import data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public static function import(array $data): mixed
    {
        $user = User::query()
            ->create($data);
        $user->student()->create($data);
        return $user;
    }
}
