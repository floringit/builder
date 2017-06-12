<?php

namespace App\Exceptions;

use \Exception;

class AuthorizationException extends Exception
{
    public function __construct()
    {
        parent::__construct(__('error.authorization'));
    }
}