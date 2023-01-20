<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = auth()->user();
        return view('dashboard.question', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'options' => 'required',
            'answer' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $options = [];
            $question = Question::create(['question' => $request->input('question')]);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
