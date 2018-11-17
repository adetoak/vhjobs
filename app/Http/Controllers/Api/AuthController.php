<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request){
    	$request->validate([
    		'email' => 'required',
    		'name' => 'required',
    		'password' => 'required'
    	]);

    	$user = User::firstOrNew(['email' => $request->email]);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	$http = new Client;
    	$response = $http->post(url('oauth/token'), [
    		'form_params'	=>	[
    			'grant_type' => 'password',
    			'client_secret'	=> '9zEdq4NKHcKA2hu9m5igRFTGTPsjR76vXij23e1h',
    			'client_id'	=> '1',
    			'username'	=> $request->email,
    			'password'	=> $request->password,
    			'scope'	=> '',
    		],

    	]);

    	return response(['data'=>json_decode((string) $response->getBody(), true)]);

    }
    public function login(){
    	
    }
}
