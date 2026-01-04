<?php


namespace App\Http\Controllers\User;
use App\Models\Result;
use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    // Show all active quizzes
    public function index()
    {
        $quizzes = Quiz::where('is_active', 1)->get();
        return view('user.quizzes.index', compact('quizzes'));
    }

    // Show quiz questions
    public function show($quiz_id)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($quiz_id);
        return view('user.quizzes.attempt', compact('quiz'));
    }

    // Submit quiz & calculate result
    public function submit(Request $request, $quiz_id)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($quiz_id);

        $score = 0;
        $total = $quiz->questions->count();

        foreach ($quiz->questions as $question) {
            $selectedOption = $request->input('question_' . $question->id);

            if ($selectedOption) {
                $correct = $question->options
                    ->where('id', $selectedOption)
                    ->where('is_correct', 1)
                    ->first();

                if ($correct) {
                    $score++;
                }
            }
        }
        // ✅ Save result
        Result::create([
            'user_id' => auth()->id(),
            'quiz_id' => $quiz_id,
            'score' => $score,
        ]);

        return view('user.quizzes.result', compact('quiz', 'score', 'total'));
    }
    public function history()
    {
        $results = Result::with('quiz')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('user.quizzes.history', compact('results'));
    }

}
