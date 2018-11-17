<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services;

class AccountController extends Controller
{
	public function profile(){
		$user = Auth::user();
		$services = Services::where('userid', $user->id)->paginate(5);
    	return view('profile', compact('user', 'services'));
    }

    public function editProfile(){
    	$user = Auth::user();
    	return view('edit-profile', compact('user'));
    }
}
