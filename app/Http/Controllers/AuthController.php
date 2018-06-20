<?php

namespace Numeo\Http\Controllers;

use Illuminate\Http\Request;
use Numeo\Http\Requests\AuthRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class AuthController extends Controller
{
    //
    public function login(AuthRequest $request)
    {
        // grab credentials from the request
        $credentials = $request->only('username', 'password');
//            dd($credentials);
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}
