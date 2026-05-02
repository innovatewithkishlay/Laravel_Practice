<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class NameRuleYZ implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //set validations rules for name filed
        if(empty($value)){
            $fail("Nmae field should not be empty");
        }
        $value=trim($value);
        if(!preg_match('/^[a-zA-Z]+$/',$value)){
            $fail("Name field should only contain letters");
        }
        if(strlen($value)<3 || strlen($value)>15){
            $fail("Name field should be between 3 and 15 characters");
        }
    }
}
