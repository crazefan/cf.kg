@extends('layout')
 
@section('title')
cf.kg
@stop
 
@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>find infinte possibilities</h1>
    <div style="text-align: center">
      <a href="#" class="myButton">Learn more</a>
    </div>
  </div>
</div> 
<div class = "container">
	<?php
		$projects = array_chunk(iterator_to_array($projects), 3);
	?>
	@foreach($projects as $projectsChunk)
		<div class="row">
			@foreach($projectsChunk as $project)
				@include('projects/project_preview')
			@endforeach
		</div>
	@endforeach
</div>
@stop