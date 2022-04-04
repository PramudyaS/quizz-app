<?php

namespace App\Http\Actions\User;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateNewUser
{
    public function create(RegisterRequest $request) : User
    {
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = $request->role;
        $user->save();

        return $user;
    }
}
