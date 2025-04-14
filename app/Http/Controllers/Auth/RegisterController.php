<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// use App\Http\Requests\Auth\RegisterRequest;

use App\Models\User;

use App\Http\Resources\UserResource;

class RegisterController extends Controller
{
  public function __invoke (RegisterRequest $request)
  {
    $input = $request -> validated();

    $user['password'] = bcrypt($user['password']);
    $user = User::query() -> create($input);

    return new UserResource($user);
  }
}
