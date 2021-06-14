<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\GeneralMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;
use Validator;
use Auth;

class RegisterController extends Controller
{
    use GeneralMessage;
    /**
     * Register api
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);


        return response()->json(['token' => $user], 200);

    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['user-api' => $token];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }


    }

    public function logout (Request $request) {
        if(Auth::check()) {
            Auth::user()->token()->revoke();
            return response()->json(["status" => "success", "error" => false, "message" => "Success! You are logged out."], 200);
        }
        return response()->json(["status" => "failed", "error" => true, "message" => "Failed! You are already logged out."], 403);
    }



    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
//    public function login(Request $request)
//    {
//        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
//            $user = Auth::user();
//            $success['token'] =  $user->createToken('MyApp')-> accessToken;
//            $success['name'] =  $user->name;
//
//            return $this->sendResponse($success, 'User login successfully.');
//        }
//        else{
//            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
//        }
//    }
}
