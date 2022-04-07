@extends('layouts.admin_layout')

@section('content')
    <div class="flex-inline w-full">
        <div class="w-full max-w-lg px-10 py-8 bg-white rounded-lg shadow-xl mx-auto mt-10">
            <div class="max-w-md space-y-6">
                <form action="{{  route('question_category.update',$questionCategory->id)  }}" method="POST">
                    @csrf @method('PATCH')
                    <h2 class="text-2xl font-bold ">Form Edit Question Category</h2>
                    <hr class="my-6">
                    <label class="uppercase text-sm font-bold opacity-70">Name</label>
                    <input type="text"
                           name="name"
                           value="{{  $questionCategory->name }}"
                           class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    <button type="submit" class="py-2 px-3 my-2 bg-emerald-500 text-white font-medium rounded
                    bg-indigo-500 cursor-pointer ease-in-out duration-300">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
