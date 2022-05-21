<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $admin = User::where('role','admin')->count();
        $guest = User::where('role','guest')->count();

        $question_by_category = Question::select('question_categories.name','questions.question_category_id',DB::raw('COUNT(questions.question_category_id) as count'))
            ->join('question_categories','questions.question_category_id','question_categories.id')
            ->groupBy('question_category_id')
            ->get();


        $label_qc = collect($question_by_category)->map(function($name){
            return $name->name;
        });
        return view('admin.dashboard.index',[
            'admin' => $admin,
            'guest' => $guest,
            'label_qc'  => $label_qc,
            'question_by_category'  => $question_by_category
        ]);
    }
}
