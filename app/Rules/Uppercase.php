<?php

namespace App\Rules;

// Custom validation rule
// Using command line: php artisan make:rule Uppercase

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($value !== strtoupper($value)) {
            $fail('The :attribute must be uppercase.');
        }
    }
}
