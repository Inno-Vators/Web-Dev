<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $courses = Course::all();
        return view('dashboard.home.profile', ['user' => $user], ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required|min:10',
                'email' => 'required'
            ]);
            $user = auth()->user();
            $email = $user->email;

            DB::beginTransaction();

            $user = Message::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
            ]);
            DB::commit();
            return redirect()->back()->with('message', 'Message Sent Successfully');
            DB::rollBack();

        }
    }

    public function show(Message $message)
    {
        $user = auth()->user();
        $messages = Message::all();
        return view('admin.message.index', ['user' => $user], ['messages' => $messages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
    
}
