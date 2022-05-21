<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = rand().date('Ymd');
        $user = Auth::user()->id;
        $answers = collect($request->right_answer)->map(function($item,$key) use($request,$user,$token){
            return [
                'token'         => $token,
                'question_id'   => $key,
                'user_id'       => $user,
                'answer'        => $request->right_answer[$key],
                'status'        => Question::find($key)->correct_answer === $request->right_answer[$key] ?? false,
                'date'          => Carbon::now(),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ];
        })->values()->toArray();

        $answer = Answer::insert($answers);

        return redirect()->route('answer.show',$token)->withMessage('Success do quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        $report = Answer::where('token',$token)
            ->with('question.question_category')
            ->get();

        $correct    = $report->where('status',1)->count();
        $incorrect  = $report->where('status',0)->count();
        $all        = $report->count();
        $percentage = round($correct / $all * 100);

        return view('guest.report_quiz',compact('report','correct','incorrect','percentage','all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
