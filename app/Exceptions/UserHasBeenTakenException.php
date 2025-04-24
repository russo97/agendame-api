<?php

namespace App\Exceptions;

use Exception;
use App\Traits\RenderToJson;

class UserHasBeenTakenException extends Exception
{
  use RenderToJson;

  protected $code    = 400;
  protected $message = 'Este e-mail já foi cadastrado!';
}
