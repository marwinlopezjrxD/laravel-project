<?php
// php artisan make:rule Uppercase
// "|" means pipe? idk
// when using custom validation rule, use it only in small letters (Uppercase -> uppercase)
namespace App\Rules;

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
        //
        if(strtoupper($value) != $value){
            $fail('The :attribute must be in uppercase.');
        }
        // this also works fine
        // if(strtoupper($value) != $value){
        //     $fail($attribute. 'attribute must be uppercase.');
        // }
    }
}
