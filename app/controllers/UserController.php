<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin() {

		return View::make('user.login');
	}

	public function postLogin() {
		
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		   return Redirect::route('dashboard');
		}
	}

	public function showSignup() {

		return View::make('user.signup');
	}

	public function postSignup() {
		
		Input::flash();
		
		$details = array(
	        'email'    => Input::get('email'),
	        'password' => Input::get('password'),
	        'password_confirmation' => Input::get('password_confirmation'),
	        'first_name' => Input::get('first_name'),
	        'last_name' => Input::get('last_name'),
	    );

	    // What rules for validation
		$rules =  array(
	        'email' => 'required|email|unique:users,email',
	        'password' => 'required|confirmed|min:6',
	        'first_name' => 'required|alpha',
	        'last_name' => 'required|alpha',
		);

		// What messages triggers when the input doesn't match the rules
		$message = array(
			'email.email' => 'Your email address is not valid',
		);

		// Run validation	
		$validator = Validator::make($details, $rules, $message);
				    
		// Check if the validation fails
	    if($validator->fails()){
			    	
	    	return Redirect::route('signup')->withErrors($validator);

	    } else {

			// Register the user
	    	$user = new User;
	    		$user->email = Input::get('email');
	    		$user->password = Hash::make(Input::get('email'));
	    		$user->first_name = Input::get('first_name');
	    		$user->last_name = Input::get('last_name');
	    	$user->save();
	    	Auth::login($user);
	    	return Redirect::route('dashboard')->with('message', '<h3>You are now registered and sent to your dashboard</h3>');

	    }

	}

	public function logout(){

		Auth::logout();
		return Redirect::route('home');
	}

}
