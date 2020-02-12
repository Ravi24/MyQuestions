<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionFormRequest;
use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{

    public function index(Request $request,Question $question){
            
            $q = $question->where('id',$request->id)->first();
            return view('questions.question')->with('question',$q);
    }
    public function create(){
        if(\Auth::check()){
            return view('questions.askquestion');
        }
        else{
            return view('auth.login');
        }
    }

    public function createPost(CreateQuestionFormRequest $request)
    {
        $question->create([
                      'tags' => $request->tags,
                      'title' => $request->title,
                      'question' => $request->question,
                      'created_by' => \Auth::user()->id  
                ]);
    }

    // public function createPost(Question $question, Request $request)
    // {
    //     $request->validate([
    //         'title' => ['required', 'string', 'max:255'],
    //         'tags' => ['required', 'string'],
    //         'question' => ['required', 'string', 'max:2500']
    //     ]);
        
    //     $question->create([
    //           'tags' => $request->tags,
    //           'title' => $request->title,
    //           'question' => $request->question,
    //           'created_by' => \Auth::user()->id  
    //     ]);
    // }
}
