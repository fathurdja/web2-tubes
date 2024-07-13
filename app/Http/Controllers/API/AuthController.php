<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            if (Auth::attempt($credentials)) {


                if (auth()->user()->is_admin) {
                    $user = Auth::user();
                    $data = [
                        'status' => true,
                        'message' => 'login success',
                        'data' => [
                            'access_token' => $user->createToken('AuthToken')->plainTextToken,
                            'token_type' => 'byare',
                            'user' => [
                                'name' => $user->name,
                                'email' => $user->email,
                            ]
                        ]
                    ];
                    return response()->json($data, 200);
                } else {
                    return response()->json(['status' => false, 'message' => 'invalid credentials'], 400);
                }
            }
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }



        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        try {
            $request->user()->tokens()->delete();
            $data = [
                "status" => true,
                "message" => "Logout successful"
            ];
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => false,
                "message" => $th->getMessage(),
            ], 500);
        }
    }
}
