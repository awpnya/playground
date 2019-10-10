<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class EmailValidate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($result)
    {
        //$this->result = $result;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       // return containsOnly($value) >= $this->result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        //return "{$this->result}The validation error meaaaaaaaaaaaaassage.";
    }
}
