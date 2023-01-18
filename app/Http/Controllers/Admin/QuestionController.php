<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index($id)
    {
        $course = Course::findOrFail($id);
        $course->load(['questions' => function($query){
            return $query->with('options');
        }]);
        return view('admin.course.questions.index',[
            'course' => $course
        ]);
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $question->load(['options']);
        return view('admin.course.questions.edit',[
            'question' => $question
        ]);
    }

    public function addquestion($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.create',[
            'course' => $course
        ]);
    }

    public function store(Request $request, $course)

    {
        $course = Course::findOrFail($course);
        $request->validate([
            'question' => 'required',
            'options' => 'required',
            'answer' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $options = [];
            $question = $course->questions()->create(['question' => $request->input('question')]);

            foreach ($request->input('options') as $k => $option) {
                array_push($options, [
                    'option' => $option,
                    'status' => $k == $request->input('answer')
                ]);
            }
            $question->options()->createMany($options);
            DB::commit();
            return back()->with('success', 'Question added successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

}
