<?php

namespace App\Http\Controllers\Auth;

use App\Http\Actions\User\CreateNewUser;
use App\Http\Actions\User\LoggedIn;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request,CreateNewUser $user)
    {
        $verified_user = $user->create($request);
        (new LoggedIn())->login($verified_user);
        return redirect('/')->withMessage('Success register account');
    }
}
