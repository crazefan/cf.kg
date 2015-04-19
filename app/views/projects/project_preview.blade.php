<div class="col-md-4">
	<h3>{{{ $project->project }}}</h3>
	<p>
		{{ date_create($project->created_at)->format('d.m.Y H:i:s')}}<br />
		 Title: {{ $project->title }} <br /> Type: {{ Project::$types[$project->type] }} <br />
		Goal: {{ $project->goal }}
	</p>
	<p> {{{ $project-> comment }}} </p>

	<p>
		Added by: <b>
			@if ($project->author)
				{{ $project->author->username }}
			@else 
				Null
			@endif
		</b><br/>
		Views: {{ $project->views }}
	</p>

	<p><a class="btn btn-default" href="{{action ('ProjectsController@getView', array($project->id)) }}" role="button">Project details &raquo;</a></p>
</div>