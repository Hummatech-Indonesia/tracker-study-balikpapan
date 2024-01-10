<?php

namespace App\Rules;

use App\Enums\GenderEnum;
use App\Enums\RoleEnum;
use App\Enums\StatusEnum;
use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class RoleRule implements Rule
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
        return in_array($value, [RoleEnum::ALUMNI->value, RoleEnum::STUDENT->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Role yang anda pilih tidak valid';
    }
}
