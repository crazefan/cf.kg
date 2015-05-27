<?php
 
class ProjectsController extends BaseController {

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
		$data = Input::all();

		if(Auth::check())
		{
			$data['user_id'] = Auth::user()->id;
		}

		$Project = Project::create($data);

		if (Input::hasFile('image'))
		{
		    $file = Input::file('image');
		    $folderid = $Project->id;
		    $file->move("uploads/$folderid/", $name="projectImg.jpeg");
		}

        return 'Project added, id: ' . $Project->id; ////ПЕРЕДЕЛАТЬ ВЬЮ
       	
	}

	public function getView($projectId) 
	{
		$project = Project::find($projectId);

		if (!$project)
		{
			App::abort(404);
		}

		$project->views++;
		$project->save();

		return View::make('projects/view', array('project' => $project));
	}
    
}