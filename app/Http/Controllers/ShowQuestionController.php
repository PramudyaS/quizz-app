<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ShowQuestionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(!$request->has('question_category_id')){
            return redirect()->route('quest')->withError('Question is empty select another category');
        }

        $questions = Question::where('question_category_id',$request->question_category_id)
            ->inRandomOrder()
            ->limit(10)
            ->get();

        return view('guest.quest.show',compact('questions'));
    }
}
