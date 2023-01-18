<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $img_dir = $request->file('image')->store('user_images', 'public');

        DB::beginTransaction();

        $user = User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'nationality' => $request->input('nationality'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'image' => $img_dir


        ]);
        DB::commit();
        return redirect()->intended('home')->with('message', 'Account Registered Success');
        DB::rollBack();

    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */

    public function loginUser(Request $request)
    {

        //code...
        $validateUser = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );



        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->intended('home')->with('message', 'Login Success');
        }

        return redirect()->back()->with('message','Invalid username or password');
    }


}
