<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\UserResource;
use App\Http\Requests\Auth\LoginRequest;

use App\Exceptions\InvalidAuthenticationException;

class LoginController extends Controller
{
  /**
   * @param  LoginRequest $request
   * @return UserResource
   * @throws InvalidAuthenticationException
   */
  public function __invoke (LoginRequest $request): UserResource
  {
    $input = $request -> validated();

    if (!auth() -> attempt($input)) {
      throw new InvalidAuthenticationException();
    }

    request() -> session() -> regenerate();

    return new UserResource(auth() -> user());
  }
}
