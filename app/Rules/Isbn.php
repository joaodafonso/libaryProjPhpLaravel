<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Isbn implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Regex para validar ISBN-10 ou ISBN-13
        if (!preg_match('/^(97(8|9))?\d{9}(\d|X)$/', $value)) {
            $fail("O campo :attribute deve ser um ISBN válido.");
        }
    }
}

