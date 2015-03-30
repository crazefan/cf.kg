<?php
 
class ProjectsController extends BaseController {

	public function getAdd() {
    	return View::make('projects/add');
	}

	public function postAdd()
	{
		$Project = Project::create(Input::all());
        return 'Project added, id: ' . $Project->id;
	}
    
}