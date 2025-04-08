<?php

namespace App\Exceptions;

use Exception;
use App\Traits\RenderToJson;

class InvalidAuthenticationException extends Exception
{
  use RenderToJson;

  protected $code    = 400;
  protected $message = 'E-mail e/ou senha informados são inválidos.';
}
