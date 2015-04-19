@extends('layout')

@section('title')
Проект {{ $project->project }}
@stop

@section('content')
    <div class="container">
        <h2>
            Project {{{ $project->project }}}
        </h2>
    </div>

<div class="container">
    <table class="table table-striped">
{{--     $table->string('title')->index();

            $table->string('country')->index();

            $table->text('comment');

            $table->integer('duration');

            $table->integer('goal');

            $table->decimal('current');

            $table->boolean('backed');

            $table->string('video');

            $table->integer('views')->unsigned(); --}}
        <tr>
            <td>Title:</td>
            <td>{{ $project->title }}</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>{{ Project::$types[$project->type] }}</td>
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
            <td>Current:</td>
            <td>{{{ $project->current }}}</td>
        </tr>
        
       
        <tr>
            <td>Views:</td>
            <td>{{ $project->views }}</td>
        </tr>
    </table>
</div>
@stop
