@extends('layouts.admin_layout')

@section('content')
    <div class="flex-inline w-full">
        <div class="w-full max-w-lg px-10 py-8 bg-white rounded-lg shadow-xl mx-auto mt-10">
            <div class="max-w-md space-y-6">
                <form action="{{  route('user.update',$user->id)  }}" method="POST">
                    @csrf @method('PATCH')
                    <h2 class="text-2xl font-bold ">Form Edit User</h2>
                    <hr class="my-6">
                    <div class="w-full">
                        <label class="uppercase text-sm font-bold opacity-70">Name</label>
                        <input type="text"
                               name="name"
                               value="{{  $user->name  }}"
                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    </div>
                    <div class="w-full">
                        <label class="uppercase text-sm font-bold opacity-70">Email</label>
                        <input type="email"
                               name="email"
                               value="{{  $user->email  }}"
                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    </div>
                    <div class="w-full">
                        <label class="uppercase text-sm font-bold opacity-70">New Password</label>
                        <input type="password"
                               name="password"
                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    </div>
                    <div class="w-full">
                        <label class="uppercase text-sm font-bold opacity-70">Role</label>
                        <div class="relative mt-2">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name="role">
                                <option value="admin" {{ $user->role == "admin" ? 'selected' : null  }}>Admin</option>
                                <option value="guest" {{ $user->role == "guest" ? 'selected' : null  }}>Guest</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="py-2 px-3 my-2 bg-emerald-500 text-white font-medium rounded
                    bg-indigo-500 cursor-pointer ease-in-out duration-300">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
