<?php

namespace App\Services;

use App\Helpers\UserHelper;
use App\Traits\UploadTrait;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\UpdateProfileRequest;

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

        if ($request->hasFile('photo')) {
            $destinationPath = $this->folderStorage(UserHelper::getUserName(), UploadDiskEnum::PROFILE->value);
            if ($old_file != null) {
                $this->remove($old_file);
            }
            $old_file = $this->upload(UserHelper::getUserName() . '/' . UploadDiskEnum::PROFILE->value, $request->file('photo'));
        }
        $data['photo'] = $old_file;
        return $data;
    }
}
