<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::with('question_category')->paginate(10);

        return view('admin.question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question_categories = QuestionCategory::all();

        return view('admin.question.create',compact('question_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();
        $question->question_category_id = $request->question_category_id;
        $question->name                 = $request->name;
        $question->question_answers     = json_encode($request->answer_text);
        $question->correct_answer       = $request->right_answer;
        $question->save();

        return redirect()->route('question.index')->withMessage('Success create question');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $question_categories = QuestionCategory::all();
        $question_answers = json_decode($question->question_answers);

        return view('admin.question.edit',
            compact('question','question_categories','question_answers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question = Question::find($question->id);
        $question->question_category_id = $request->question_category_id;
        $question->name                 = $request->name;
        $question->question_answers     = json_encode($request->answer_text);
        $question->correct_answer       = $request->right_answer;
        $question->save();

        return redirect()->route('question.index')->withMessage('Success update question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
