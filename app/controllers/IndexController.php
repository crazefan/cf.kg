<?php
 
class IndexController extends BaseController {
 
    public function getIndex() {
    	$projects = Project::orderBy('created_at', 'DESC')->take(6)->get();
    	$counter = Project::count();
        return View::make('index', array(
        								'projects' => $projects,
        								'counter' => $counter,

        						));

    }

    
}