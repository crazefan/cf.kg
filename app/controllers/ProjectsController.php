<?php
 
class ProjectsController extends BaseController {

	public function getAdd() {
    	return View::make('projects/add');
	}

	public function postAdd()
	{
		$Project = Project::create(Input::all());

		if (Input::hasFile('image'))
		{
		    $file = Input::file('image');
		    $folderid = $Project->id;
		    $file->move("uploads/$folderid/", $name="projectImg.jpeg");
		}

		

        return 'Project added, id: ' . $Project->id;
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