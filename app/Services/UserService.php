<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Helpers\UserHelper;
use App\Traits\UploadTrait;

class UserService
{
    use UploadTrait;

    /**
     * updateProfile
     *
     * @return array
     */
    public function updateProfile(UpdateProfileRequest $request): array
    {
        $old_file = UserHelper::getUserPhoto();

        $data = $request->validated();

        if ($request->hasFile('profile')) {
            $destinationPath = $this->folderStorage(UserHelper::getUserName(), UploadDiskEnum::PROFILE->value);
            if ($old_file != null) {
                $this->remove($old_file);
            }

            $old_file = $request->file('profile')->store($destinationPath, 'public');
        }
        $data['profile'] = $old_file;
        return $data;
    }
}
