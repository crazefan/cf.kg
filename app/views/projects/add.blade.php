@extends('layout')
 
@section('title')
Новый проект
@stop
 
@section('content')
    <div class="container">
        <h2>Project creation</h2>
 
        {{ Form::open(array('url' => action('ProjectsController@postAdd'), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
 			
		@include('projects/form')
        <br \>
        <div class="form-group">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary submit-button">Add</button>
            </div>
        </div>

	 {{ Form::close() }}
</div>
@stop