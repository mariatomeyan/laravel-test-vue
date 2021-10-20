<?php

namespace App\Rules;

use App\Exceptions\ExceptionList;
use Illuminate\Contracts\Validation\Rule;

abstract class AbstractListFilters implements Rule
{
    /** @var string */
    private const DATE_REGEXP = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';

    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    abstract public function passes($attribute, $value): bool;

    /**
     * @return string
     */
    public function message(): string
    {
        return ExceptionList::INVALID_FILTER;
    }

    /**
     * @param $value
     * @param string $type
     * @return bool
     */
    protected function isValidType($value, string $type): bool
    {
        switch ($type) {
            case 'int':
                return is_int($value);
            case 'string':
                return is_string($value);
            case 'array':
                if (!is_array($value)) {
                    return false;
                }

                foreach ($value as $item) {
                    if (!is_string($item)) {
                        return false;
                    }
                }

                return true;
            case 'date':
                return is_string($value)
                    && is_int(strtotime($value))
                    && preg_match(self::DATE_REGEXP, $value);
        }
    }
}
