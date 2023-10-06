<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required | email | string',
            'password'=>'required'
        ]);

        if(auth()->guard('user')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = auth()->guard('user')->user();

            $token = $user->createToken('Laravel')->accessToken;

            return response()->json($token);
        }
        return response()->json('parol xato');


    }
    
    public function logout(){
        $user = auth()->guard('api')->user();

        $user->token()->revoke();
        
        return response()->json('logoute');
    }
}
