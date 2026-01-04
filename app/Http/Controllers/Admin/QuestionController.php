<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Show questions of a quiz
    public function index($quiz_id)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($quiz_id);
        return view('admin.questions.index', compact('quiz'));
    }

    // Show add question form
    public function create($quiz_id)
    {
        $quiz = Quiz::findOrFail($quiz_id);
        return view('admin.questions.create', compact('quiz'));
    }

    // Store question + options
    public function store(Request $request, $quiz_id)
    {
        $request->validate([
            'question' => 'required',
            'options' => 'required|array|size:4',
            'correct_option' => 'required|integer',
        ]);

        $question = Question::create([
            'quiz_id' => $quiz_id,
            'question' => $request->question,
        ]);

        foreach ($request->options as $index => $optionText) {
            Option::create([
                'question_id' => $question->id,
                'option_text' => $optionText,
                'is_correct' => ($index == $request->correct_option),
            ]);
        }

        return redirect()
            ->route('admin.questions.index', $quiz_id)
            ->with('success', 'Question added successfully');
    }
}
