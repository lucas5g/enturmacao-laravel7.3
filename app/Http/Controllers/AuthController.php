<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login()
    {
        // return ['msg' => 'teste'];
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
       
         $user = User::where('email', $credentials['email'])->first();
        // return $user;
        return $this->respondWithToken($token, $user);
    }

    protected function respondWithToken($token, $user)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 50000,
            'user' => $user,
            // 'user' => Auth::user(),

        ]);
    }
}
