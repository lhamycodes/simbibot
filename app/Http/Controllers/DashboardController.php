<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Exam;
use App\Test;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statisticsArray = array();

        $numQuestions = Question::count();
        $numQuestionArray = ['Total number of questions' => $numQuestions];

        $numExplanations = Question::where('explanation', '!=', NULL)->count();
        $numExplanationArray = ['Total questions with explanations' => $numExplanations];

        $numTopics = Question::where('topic_tag', '!=', NULL)->count();
        $numTopicArray = ['Total Questions having topics' => $numTopics];

        $numExams = Exam::count();
        $numExamArray = ['Number of exams' => $numExams];

        array_push($statisticsArray, $numQuestionArray, $numExplanationArray, $numTopicArray, $numExamArray);
        
        $exms = Exam::with(['tests', 'tests.questions'])->get();
        // dd($exms[0]);
        $exams = Exam::select('id', 'name')->get();
        $arrayExamQuestions = array();
        for($i = 0; $i < count($exams); $i++){
            $countKey = strtoupper($exams[$i]->name);
            $countTestValue = Test::where('super_exam_id', $exams[$i]->id)->count();
            $testQuestions = Test::select('id', 'amount')->where('super_exam_id', $exams[$i]->id)->get();

            $tq = array();
            for($k = 0; $k < count($testQuestions); $k++){
                $currExamValue = Question::where('test_id', $testQuestions[$k]->id)->count();
                array_push($tq, $currExamValue);   
            }

            $countExamValue = array_sum($tq);
            $arrayToPush = 
            [$countKey => 
                [
                    'test' => $countTestValue,
                    'question' => $countExamValue,
                ]
            ];
            array_push($arrayExamQuestions, $arrayToPush);
        }

        // dd($statisticsArray);
        return view('dashboard', ['basic' => $statisticsArray, 'numTest' => $arrayExamQuestions]);
    }
}
