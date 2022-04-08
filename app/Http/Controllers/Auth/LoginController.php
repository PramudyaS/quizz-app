<?php

namespace App\Http\Controllers\Auth;

use App\Http\Actions\User\LoggedIn;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email',$request->email)->first();

        if(!$user){
            return back()->withError('User/password is wrong');
        }

        $check = Hash::check($request->password,$user->password);

        if(!$check){
            return back()->withError('User/password is wrong');
        }

        (new LoggedIn())->login($user);

        if ($user->role === "admin")
        {
            return redirect('/admin')->withMessage('Login Success');
        }

        if($user->role === "guest")
        {
            return redirect('/')->withMessage('Login Success');
        }
    }
}
