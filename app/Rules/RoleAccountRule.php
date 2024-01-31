<?php

namespace App\Rules;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Contracts\Validation\Rule;

class RoleAccountRule implements Rule
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
        return in_array($value, [RoleEnum::ADMIN->value, RoleEnum::STAFF->value]);
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
