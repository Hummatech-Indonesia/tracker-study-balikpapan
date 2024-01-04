<?php

namespace App\Rules;

use Closure;
use App\Enums\WorkSystemEnum;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class WorkSystemRule implements Rule
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
        return in_array($value, [WorkSystemEnum::CONTRACT->value, WorkSystemEnum::PERMANENTWORK->value, WorkSystemEnum::WORKINGPARTTIME->value, WorkSystemEnum::FREELANCE->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Sistem kerja tidak valid';
    }
}
