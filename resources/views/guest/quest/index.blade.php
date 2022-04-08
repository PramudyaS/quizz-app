@extends('layouts.guest_layout')

@section('content')
<div class="flex h-screen">
    <div class="bg-white w-1/2 m-auto p-4 rounded-md shadow-xl">
        <form action="{{  route('quest.show')  }}">
            @csrf
            <h3 class="text-black text-2xl  font-medium text-center">Select Quiz Category</h3>
            <hr class="my-6">
            <div class="w-full">
                <label class="uppercase text-sm font-bold opacity-70">Question Category</label>
                <div class="relative mt-2">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="question_category_id">
                        @foreach($question_categories as $category)
                            <option value="{{  $category->id  }}">{{  $category->name  }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <button type="submit" class="bg-purple-600 w-full px-2 py-2 text-white mt-10">Start</button>
        </form>
    </div>
</div>
@endsection
