<?php

namespace App\Exceptions;

use Illuminate\Http\Response;
use Throwable;

abstract class AbstractException extends \Exception
{
    /**
     * AbstractException constructor.
     * @param int $code
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct($code = 0, $message = '', ?Throwable $previous = null)
    {
        if (empty($message)) {
            $message = $this->message;
        }

        if ($code === 0) {
            $code = $this->code;
        }

        parent::__construct($message, $code, $previous);
    }

    /** @var int */
    protected $code = Response::HTTP_BAD_REQUEST;
}
