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
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'image' => 'mimes:jpg,png,jpeg'
        ]);

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
            'image' => $request->input('image')
        ]);
        DB::commit();
        return redirect()->back()->withInput($request->input())->with('message', 'Account Register Success');
        DB::rollBack();

    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */

    public function loginUser(Request $request) {
        try {
            //code...
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

                if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation Error',
                    'errors' => $validateUser->errors()
                ], 401);
                }

                if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email and Password does not match with our record.'
                ], 401);
                }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}
