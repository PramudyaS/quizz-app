<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCategory;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function streamReportQuestionPDF()
    {
        $question = Question::all();
        $pdf = PDF::loadView('pdf.question_pdf', ['question'=>$question]);
        return $pdf->stream('question_report.pdf');
    }

    public function streamReportQuestionCategoryPDF()
    {
        $category = QuestionCategory::all();
        $pdf = PDF::loadView('pdf.question_category_pdf', ['category'=>$category]);
        return $pdf->stream('question_category_report.pdf');
    }
}
