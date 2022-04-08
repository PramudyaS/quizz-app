@extends('layouts.guest_layout')

@section('content')
    <div class="h-full overflow-y-auto">
        <div class="bg-white mt-10 mb-10 h-auto w-1/2 m-auto p-4 rounded-md shadow-xl">
            <form action="{{  route('answer.store')  }}" method="POST">
                @csrf
                <h3 class="text-black text-2xl  font-medium text-center">Please Answer All Question Below</h3>
                <hr class="my-6">
                @foreach($questions as $question)
                    <div class="w-full mt-4">
                        <p class="uppercase text-sm font-bold opacity-70">{{ $loop->index + 1  }}.{{  $question->name
                        }}</p>
                        <div class="w-full mt-2">
                            <div class="inline">
                                A. {{ json_decode($question->question_answers)->A  }}
                                <input class="checked:bg-blue-500 rounded-full h-4 w-4 border
                                        border-gray-300
                                        border-blue-600
                                        focus:outline-none
                                        transition duration-200 mt-1 align-top bg-no-repeat bg-center
                                        bg-contain float-left mr-2 cursor-pointer"
                                       type="radio"
                                       name="right_answer[{{ $question->id  }}]" value="A">
                            </div>
                        </div>
                        <div class="w-full mt-2">
                            <div class="inline">
                                B.{{ json_decode($question->question_answers)->B  }}
                                <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                         type="radio"
                                         name="right_answer[{{ $question->id  }}]" value="B">
                            </div>
                        </div>
                        <div class="w-full mt-2">
                            <div class="inline">
                                C.{{ json_decode($question->question_answers)->C  }}
                                <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                         type="radio"
                                         name="right_answer[{{ $question->id  }}]" value="C">
                            </div>
                        </div>
                        <div class="w-full mt-2">
                            <div class="inline">
                                D.{{ json_decode($question->question_answers)->D  }}
                                <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                         type="radio"
                                         name="right_answer[{{ $question->id  }}]" value="D">
                            </div>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="bg-purple-600 w-full px-2 py-2 text-white mt-10">Submit</button>
            </form>
        </div>
    </div>
@endsection
