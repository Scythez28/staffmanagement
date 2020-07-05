<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        $data = request()->validate([
            'question.question' => 'required',
            'question.question_type' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaires/'.$questionnaire->id);
        /*dd($request);*/
    }

    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($questionnaire->path());
    }
}
