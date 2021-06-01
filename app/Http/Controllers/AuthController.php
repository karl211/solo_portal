<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 202);
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        // Auth($user);
        $response = [];
        $response['token'] = $user->createToken('api-application')->accessToken;
        $response['email'] = $user->email;

        return response()->json($response, 200);
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = Auth::user();
            
            $response = [];
            $response['user'] = $user->only(['first_name', 'last_name', 'email', 'concept_name', 'mobile_number']);
            $response['user']['token'] = $user->createToken('api-application')->accessToken;

            return response()->json($response, 200);
        } else {
            return response()->json(['error' => 'Unathorized Access'], 203);
        }
    }
    
}
