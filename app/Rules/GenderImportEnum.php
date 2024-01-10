<?php

namespace App\Rules;

use App\Enums\GenderEnum;
use Illuminate\Contracts\Validation\Rule;

class GenderImportEnum implements Rule
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
        return in_array($value, [GenderEnum::LAKILAKI->value, GenderEnum::PEREMPUAN->value]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Jenis kelamin tidak valid';
    }
}
