<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class AuthenticationException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        Log::error($this->message);
    }
}
