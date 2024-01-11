<?php

namespace App\Rules;

use Closure;
use App\Enums\ActivityStatusEnum;
use App\Rules\ActivityStatusRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class ActivityStatusRule implements Rule
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
        return in_array($value, [ActivityStatusEnum::STUDY->value, ActivityStatusEnum::WORK->value, ActivityStatusEnum::NOTWORK->value ,ActivityStatusEnum::BUSSINESS->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Status Pekerja tidak valid';
    }
}
