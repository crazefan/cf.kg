<?php

class UsersController extends BaseController
{
	public function getRegister()
	{
		return View::make('users/register');	
	}

	public function postRegister()
	{
		$rules = User::$validation;

		$validation = Validator::make(Input::all(), $rules);
		if ($validation->fails())
		{
			return Redirect::to('users/register')->withErrors($validation)->withInput();

		}

		$user = new User();
		$user->fill(Input::all());
		$id = $user->register();

		return $this->getMessage("Registration is almost complete, check your email for the activation letter.");
	}

	public function getActivate($userId, $activationCode)
	{
		$user = User::find($userId);
	    if (!$user) {
	        return $this->getMessage("Incorrect activation link");
	    }
	 	
	    
	    if ($user->activate($activationCode)) {

	        Auth::login($user);
	        
	        return $this->getMessage("Your account is activated. Welcome!", "/");
	    }
	 
	   
	    return $this->getMessage("Incorrect activation link or accaunt is not activated");
	}

	public function getLogin()
	{
		return View::make('users/login');
	}

	public function getLogout() 
	{
	    Auth::logout();
	    return Redirect::to('/');
	}

	public function postLogin() 
	{
   
	    $creds = array(
	        'password' => Input::get('password'),
	        'isActive'  => 1,
    	);
 
   
	    $username = Input::get('username');
	    if (strpos($username, '@')) {
	        $creds['email'] = $username;
	    } else {
	        $creds['username'] = $username;
	    }
	 
	   
	    if (Auth::attempt($creds, Input::has('remember'))) {
	        Log::info("User [{$username}] successfully logged in.");
	        return Redirect::intended();
	    } else {
	        Log::info("User [{$username}] failed to login.");
	    }
	 
	    $alert = "Неверная комбинация имени (email) и пароля, либо учетная запись еще не активирована.";
	 
	   
	    return Redirect::back()->withAlert($alert);

	}



}

