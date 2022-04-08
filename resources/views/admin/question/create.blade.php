@extends('layouts.admin_layout')

@section('content')
    <div class="flex-inline w-full">
        <div class="w-full lg:w-1/2 px-10 py-8 bg-white rounded-lg shadow-xl mx-auto mt-10">
            <div class="w-full space-y-6">
                <form action="{{  route('question.store')  }}" method="POST">
                    @csrf
                    <h2 class="text-2xl font-bold ">Form Question</h2>
                    <hr class="my-6">
                    <div class="w-full space-y-4">
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
                        <div class="w-full">
                            <label class="uppercase text-sm font-bold opacity-70">Question</label>
                            <input type="text"
                                   name="name"
                                   class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div class="w-full">
                            <label class="uppercase text-sm font-bold opacity-70">Answers</label>
                            <div class="w-full mt-2">
                                <div class="inline">
                                    A.<input class="checked:bg-blue-500 rounded-full h-4 w-4 border
                                    border-gray-300
                                    border-blue-600
                                    focus:outline-none
                                    transition duration-200 mt-1 align-top bg-no-repeat bg-center
                                    bg-contain float-left mr-2 cursor-pointer"
                                           type="radio"
                                           name="right_answer" value="A" checked>
                                    <input type="text" name="answer_text[A]" class="w-1/2 bg-slate-200 rounded
                                    border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                </div>
                            </div>
                            <div class="w-full mt-2">
                                <div class="inline">
                                    B.<input class="rounded-full h-4 w-4 border
                                    border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                             type="radio"
                                             name="right_answer" value="B">
                                    <input type="text" name="answer_text[B]" class="w-1/2 bg-slate-200 rounded
                                    border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                </div>
                            </div>
                            <div class="w-full mt-2">
                                <div class="inline">
                                    C.<input class="rounded-full h-4 w-4 border
                                    border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                             type="radio"
                                             name="right_answer" value="C">
                                    <input type="text" name="answer_text[C]" class="w-1/2 bg-slate-200 rounded
                                    border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                </div>
                            </div>
                            <div class="w-full mt-2">
                                <div class="inline">
                                    D.<input class="rounded-full h-4 w-4 border
                                    border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                             type="radio"
                                             name="right_answer" value="D">
                                    <input type="text" name="answer_text[D]" class="w-1/2 bg-slate-200 rounded
                                    border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-10 py-2 px-3 my-2 bg-emerald-500 text-white font-medium rounded
                    bg-indigo-500 cursor-pointer ease-in-out duration-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
