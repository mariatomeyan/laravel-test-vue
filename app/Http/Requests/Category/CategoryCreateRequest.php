<?php

namespace App\Http\Requests\Category;

use App\Exceptions\ExceptionList;
use App\Http\Requests\AbstractRequest;
use App\Rules\Category\CreateCategoryRule;
use App\Rules\Category\MultiLanguageTextRule;


class CategoryCreateRequest extends AbstractRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'label' => ['required', new CreateCategoryRule()],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'label' => ExceptionList::INVALID_TITLE,
        ];
    }

    /**
     * @return array
     */
    public function getLabel(): string
    {
        return  $this->get('label');
    }

    /**
     * @return array
     */
    public function getValue(): string
    {
        return str_replace(' ', '_', $this->get('label'));
    }

}
