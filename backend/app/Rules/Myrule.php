<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    private int $num;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($n)
    {
        $this->num = $n;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return $value % $this->num === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return "{$this->num}で割り切れる数が必要です。";
    }
}
