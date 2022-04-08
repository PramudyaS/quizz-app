@extends('layouts.guest_layout')

@section('content')
<div class="h-screen overflow-y-auto">
    <div class="bg-white mt-10 mb-10 h-auto w-1/2 m-auto p-4 rounded-md shadow-xl">
        <h3 class="text-black text-2xl  font-medium text-center">Quiz Report</h3>
        <div class="w-full mt-5">
            <p>Category  : {{  $report->first()->question->question_category->name  }}</p>
            <p>Unique Id : {{  $report->first()->token }}</p>
            <p>Grade : {{ $correct  }} out of  {{ $incorrect  }} ({{ $percentage  }} %)</p>
        </div>
        <hr class="my-6">
        @foreach($report as $item)
            <div class="w-full mt-4">
                <p class="uppercase text-sm font-bold opacity-70">{{ $loop->index + 1  }}.{{  $item->question->name
                        }}</p>
                <div class="w-full mt-2">
                    <div class="inline">
                        A. {{ json_decode($item->question->question_answers)->A  }}
                        <input class="checked:bg-blue-500 rounded-full h-4 w-4 border
                                        border-gray-300
                                        border-blue-600
                                        focus:outline-none
                                        transition duration-200 mt-1 align-top bg-no-repeat bg-center
                                        bg-contain float-left mr-2 cursor-pointer"
                               readonly
                               type="radio"
                               name="right_answer[{{ $item->id  }}]" {{ $item->answer == "A" ? 'checked' : null  }}
                               value="A">
                    </div>
                </div>
                <div class="w-full mt-2">
                    <div class="inline">
                        B.{{ json_decode($item->question->question_answers)->B  }}
                        <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                               readonly
                               type="radio"
                               name="right_answer[{{ $item->id  }}]" {{ $item->answer == "B" ? 'checked' : null  }}
                               value="B">
                    </div>
                </div>
                <div class="w-full mt-2">
                    <div class="inline">
                        C.{{ json_decode($item->question->question_answers)->C  }}
                        <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                               type="radio"
                               readonly
                               name="right_answer[{{ $item->id  }}]" {{ $item->answer == "C" ? 'checked' : null  }}
                               value="C">
                    </div>
                </div>
                <div class="w-full mt-2">
                    <div class="inline">
                        D.{{ json_decode($item->question->question_answers)->D  }}
                        <input class="rounded-full h-4 w-4 border
                                        border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                               type="radio"
                               readonly
                               name="right_answer[{{ $item->id  }}]" {{ $item->answer == "D" ? 'checked' : null  }}
                               value="D">
                    </div>
                </div>
                <p class="mt-2 font-light">Corrent answer : {{  $item->question->correct_answer }}</p>
            </div>
        @endforeach
        <form action="{{ route('quest')  }}" method="GET">
            <button type="submit" class="bg-purple-600 w-full px-2 py-2 text-white mt-10">Ok</button>
        </form>
    </div>
</div>
@endsection
