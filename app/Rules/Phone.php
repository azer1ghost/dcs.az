<?php

namespace App\Rules;

use App\Models\Student;
use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule
{
    protected string $alias = 'phone';

    public function __toString()
    {
        return $this->alias;
    }

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     */
    public function passes($attribute, $value): bool
    {
        if(is_null(phone_cleaner($value)))
            return true;
        else
            return ! Student::query()
                ->where('id', '!=', request('id'))
                ->where('phone', phone_cleaner($value))
                ->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The phone must be uniq.';
    }
}
