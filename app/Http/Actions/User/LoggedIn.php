<?php

namespace App\Http\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedIn
{
    public function login(User $user) :void
    {
        Auth::login($user);
    }
}
