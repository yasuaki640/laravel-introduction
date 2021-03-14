<?php
declare(strict_types=1);

namespace App\Http\Validators;


use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters): bool
    {
        return $value % 2 === 0;
    }
}
