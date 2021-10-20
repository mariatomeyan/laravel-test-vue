<?php

namespace App\Http\Requests;

use App\Exceptions\AbstractException;
use App\Exceptions\ExceptionList;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

abstract class AbstractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @param Validator $validator
     * @throws AbstractException
     */
    protected function failedValidation(Validator $validator): void
    {
        $this->isJsonValid();

        $errors = (new ValidationException($validator))->errors();
        $error = array_shift($errors);
        $errorCode = array_shift($error);

        throw (new class(Response::HTTP_BAD_REQUEST, $errorCode) extends AbstractException {
        });
    }

    /**
     * @return void
     * @throws AbstractException
     */
    protected function isJsonValid(): void
    {
        if (empty($this->all())) {
            throw (new class(Response::HTTP_BAD_REQUEST, ExceptionList::INVALID_REQUEST_BODY) extends AbstractException {
            });
        }
    }
}
