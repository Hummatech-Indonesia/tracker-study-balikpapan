<?php

namespace App\Rules;

use Closure;
use App\Enums\ApplicantStatusEnum;
use App\Rules\ApplicantStatusRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class ApplicantStatusRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return in_array($value, [ApplicantStatusEnum::PANDING->value, ApplicantStatusEnum::ACCEPTED->value, ApplicantStatusEnum::REJECTED->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Status Pelamar tidak valid';
    }
}
