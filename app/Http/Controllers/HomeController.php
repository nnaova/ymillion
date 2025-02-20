<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use App\Events\QuestionAnswered;

class HomeController extends Controller
{
    public function index()
    {
        $questions = Questions::orderBy('id', 'asc')->get();
        return view('dashboard', compact('questions'));
    }

    public function question()
    {
        $question = Questions::where('is_answered', false)->inRandomOrder()->with('answers')->first();
        return view('question', compact('question'));
    }

    public function answer(Request $request)
    {
        $question = Questions::find($request->question_id);
        $answer = $question->answers->where('id', $request->answer)->first();
        if ($answer->is_correct) {
            $question->is_answered = true;
            $question->save();
            event(new QuestionAnswered(true, 'hello world', $question->id));

            return redirect()->route('home.question')->with('success', 'Correct!');
        }
        return redirect()->route('home.question')->with('error', 'Incorrect!');

    }
}
