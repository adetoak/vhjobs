<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\Services;
use App\Jobs;

class ControlController extends Controller
{
    public function search(){
    	return view('search');
    }
    public function brokerDetails(){
    	return view('broker_details');
    }

    public function addService(Request $request){
    	$user = Auth::user();
	    if ($request->isMethod('post')) {
	    	$data = $request->all();
            $validator = Validator::make($data, Services::$rules);

            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
            	$service = new Services();
                $service->userid = $user->id;
            	$service->title = $request->Input('title');
            	$service->category = $request->Input('category');
            	$service->description = $request->Input('description');
            	$service->state = $request->Input('state');
            	$service->location = $request->Input('location');
            	$service->working_days = $request->Input('workingdays');
            	$service->working_hours = $request->Input('workinghours');
            	$service->price = $request->Input('price');
            	
            	if ($service->save()){
            		return redirect('add-service')->with('success_msg', 'Service added');
            	}else{
            		return redirect('add-service')->with('error_msg', 'Whoops!! Something went wrong. Try again');
            	}

            }
	    }else{

	    	return view('add_service', compact('user'));
	    }
    }

     public function editService(Request $request, $id){
        $user = Auth::user();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $validator = Validator::make($data, Services::$rules);

            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $service = new Services();
                $service->userid = $user->id;
                $service->title = $request->Input('title');
                $service->category = $request->Input('category');
                $service->description = $request->Input('description');
                $service->state = $request->Input('state');
                $service->location = $request->Input('location');
                $service->working_days = $request->Input('workingdays');
                $service->working_hours = $request->Input('workinghours');
                $service->price = $request->Input('price');
                
                if ($service->save()){
                    return redirect('add-service')->with('success_msg', 'Service added');
                }else{
                    return redirect('add-service')->with('error_msg', 'Whoops!! Something went wrong. Try again');
                }

            }
        }else{ 
            $service = Services::where('id', $id)->where('userid', $user->id)->first();
            if (!empty($service)) {
                return view('edit-service', compact('user', 'service'));                
            }else{ 
                return redirect()->back();
            }
        }
    }

    public function postJob(Request $request){
    	$user = Auth::user();
	    if ($request->isMethod('post')) {
	    	$data = $request->all();
            $validator = Validator::make($data, Jobs::$rules);

            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
            	$job = new Jobs();
            	$job->title = $request->Input('title');
            	$job->category = $request->Input('category');
            	$job->description = $request->Input('description');
            	$job->state = $request->Input('state');
            	$job->location = $request->Input('location');
            	$job->address = $request->Input('address');
            	$job->duration = $request->Input('duration');
            	$job->price = $request->Input('price');
            	$job->status = '0';
            	
            	if ($job->save()){
            		return redirect('post-job')->with('success_msg', 'Job posted');
            	}else{
            		return redirect('post-job')->with('error_msg', 'Whoops!! Something went wrong. Try again');
            	}

            }
	    }else{

	    	return view('post_job', compact('user'));
	    }
    }

    public function jobRequests(){
    	//$user = Auth::user();
    	$jobs = Jobs::all();
    	return view('job_requests', compact('jobs'));
    }
}
