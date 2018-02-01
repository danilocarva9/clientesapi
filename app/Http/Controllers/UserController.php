<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;
Use Validator;

class UserController extends Controller
{
    

    public function login(Request $request){

    	if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
    		$usuario = Auth::user();
    		$success['token'] = $usuario->createToken('MyApp')->accessToken;
    		return response()->json(['success' => $success], 200);
    	}else{
    		return response()->json(['error' => 'Unauthorized'], 401);
    	}
	}



	public function register(Request $request){

		$validator = Validator::make($request->all(), [ 
			'name' => 'required|string|max:255',
	        'email' => 'required|email',
	        'password' => 'required',
	        'c_password' => 'required:same:password',
		]);

		if($validator->fails()){
			return response()->json(['error'=>$validator->errors()], 401);
		}

		$usuario = new User;
		$usuario->name = $request->input('name');
		$usuario->email = $request->input('email');
		$usuario->password = bcrypt($request->input('password'));  
		$success['name'] = $usuario->name; 
		$success['token'] = $usuario->createToken('MyApp')->accessToken;  //Aqui Gera Token Pro User
		
		if($usuario->save()) {
	         return response()->json(['success'=>$success], 200);
	    } 
	}	








}
