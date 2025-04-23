<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9_-]*$/', $value)) {
            $fail('Handler must be a valid username. Example: @username or @user_name123. Not allowed special characters and spaces.');
        }
    }
}
