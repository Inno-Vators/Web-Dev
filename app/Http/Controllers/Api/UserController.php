<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function createUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),[
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

            if($validateUser->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validateUser->errors()
        ], 401);
        }


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

            return response()->json([
                'status' => true,
                'message' => 'Account Created Successfully',
                'data' => $user,
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function loginUser(Request $request)
    {

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
                'user' => $user,
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function editProfile(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        $valid = Validator::make($request->all(),[
            'name' => ['required'],
            'surname' => ['required'],
            'username' => ['required', Rule::unique('users')->ignore($user)],
            'email' => ['required', Rule::unique('users')->ignore($user)],
            'password' => 'required|confirmed|min:8',
            'nationality' => ['required'],
            'gender' => ['required'],
            'dob' => ['required'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        if ($valid->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $valid->errors()
            ], 401);
        }
        $user->update($input, );
        return response()->json([
            'status' => true,
            'message' => 'Post Updated Successfully',
        ], 200);
    }


}
