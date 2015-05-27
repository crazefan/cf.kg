@extends('layout')

@section('title')
Проект {{ $project->project }}
@stop

@section('content')
    <div class="container">
    </div>

<div class="container">
    <div class="centertitle">
        <h1>{{ $project->title }}</h1>
    </div>
    <div class="container-top">
    <div class="row">
        <div class="col-md-8">
            <div class="pic">
                <img src="http://cf.kg/public/uploads/{{ $project->id }}/projectImg.jpeg" width="640" height="480" />
            </div>
        </div>
        <div class="col-md-4">
             <h1>{{ Project::$types[$project->type] }}</h1>
               
                   <h3>Duration:</h3> <h1>{{{ $project->duration }}} days </h1>
               
               
             <h3>Current:</h3>
                    <h1>${{{ $project->current }}}</h1>
            </br>
            </br>
            </br>
            <a href="#" class="myButtonDonate">Back this project</a>
        </div>
    </div>
    </div>

    <div class="row">
        <table class="table table-striped">
            <tr>
                <td>Title:</td>
                <td>{{ $project->title }}</td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>{{ $project->country }}</td>
            </tr>
            <tr>
                <td>Commentary:</td>
                <td>{{{ $project->comment }}}</td>
            </tr>
            <tr>
                <td>Duration:</td>
                <td>{{{ $project->duration }}}</td>
            </tr>
            <tr>
                <td>Views:</td>
                <td>{{ $project->views }}</td>
            </tr>
        </table>
      </div>
    </div>
@stop
