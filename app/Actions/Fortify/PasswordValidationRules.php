<?php

namespace App\Actions\Fortify;
use Illuminate\Validation\Rules\Password;

// use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return [Password::min(8)->mixedCase()->numbers()];
    }
}
