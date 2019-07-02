<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterAuthRequest;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiController extends Controller
{
    public $loginAfterSignUp = true;

    public function register(RegisterAuthRequest $request){

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->range = $request->range;
        $user->check_privacy = $request->check_privacy;

        $user->save();

        if($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
           'success' => true,
           'data' => $user
        ], 200);

    }

    public function login(Request $request){

        $input = $request->only('email', 'password');
        $jwt_token = null;

        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $jwt_token
        ]);

    }

    public function logout(Request $request){

        // TODO: Improve response for checking the token

//        $this->validate($request, [
//            'token' => 'required'
//        ]);

        try {
//            JWTAuth::invalidate($request->token);
            JWTAuth::invalidate($request->bearerToken());

            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ], 200);

        } catch ( JWTException $exception ) {
            return response()->json([
               'success' => false,
               'message' => 'Sorry, user cannot be logged out'
            ], 500);
        }

    }

    public function getAuthUser(Request $request) {

//        $this->validate($request, [
//            'token' => 'required'
//        ]);
        $token = $request->bearerToken();

        $user = JWTAuth::authenticate($token);

        return response()->json([ 'user' => $user ]);
    }

}
