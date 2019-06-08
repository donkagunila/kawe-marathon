<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
    	return view('app.register');	
    }

    public function register(Request $request)
    {

    	// validate the inputs

    	// insert the inputs

    	Registration::create([
    		'fname' => request('fname'),
    		'lname' => request('lname'),
    		'email' => request('email'),
    		'phone' => request('phone'),
    		'distance' => request('distance'),
    	]);

    	$request->session()->flash('success', 'You have been registered successful');
    	return redirect()->route('registration');
    }
}
