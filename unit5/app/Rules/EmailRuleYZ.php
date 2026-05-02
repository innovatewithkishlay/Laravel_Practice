<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class EmailRuleYZ implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(empty($value)){
            $fail("Email field should not be empty");
        }
        if(!str_ends_with($value,'@yahoo.com')){
            $fail("Email should end with @yahoo.com");
        }
    }
}
