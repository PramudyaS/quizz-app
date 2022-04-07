<?php

namespace App\Http\Controllers;

use App\Models\QuestionCategory;
use Illuminate\Http\Request;

class QuestionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question_categories = QuestionCategory::paginate(10);

        return view('admin.question_category.index',compact('question_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question_category = new QuestionCategory();
        $question_category->name = $request->name;
        $question_category->save();

        return redirect()->route('question_category.index')->withMessage('Success create new question category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionCategory $questionCategory)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionCategory $questionCategory)
    {
        return view('admin.question_category.edit',compact('questionCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionCategory $questionCategory)
    {
        $question_category = QuestionCategory::find($questionCategory->id);
        $question_category->name = $request->name;
        $question_category->save();

        return redirect()->route('question_category.index')->withMessage('Success update question category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionCategory  $questionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionCategory $questionCategory)
    {
        $questionCategory->deleteOrFail();

        return redirect()->route('question_category.index')->withMessage('Success delete question category');
    }
}
