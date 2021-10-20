<?php

namespace App\Rules\Category;

use App\Exceptions\ExceptionList;
use Illuminate\Contracts\Validation\Rule;

class CreateCategoryRule implements Rule
{

    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if (!is_string($value)) {
            return false;
        }

        if (!is_string($value) && $value != '') {
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return ExceptionList::INVALID_TITLE;
    }
}
