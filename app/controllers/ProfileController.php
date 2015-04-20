<?php

class ProfileController extends BaseController {

	public function getAdd() {

		if (Auth::check())
		{
    		return View::make('projects/add');
    	}
    	else
    	{
    		return View::make('users/register');
    	}

	}

	public function postAdd()
	{
		
	}

	public function getView($projectId) 
	{

	}
    
}