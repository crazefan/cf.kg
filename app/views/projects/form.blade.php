<div class="form-group">
    <label for="type" class="col-sm-2 control-label">Project type</label>
    <div class="col-sm-5">
        {{ Form::select('type', Project::$types, null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-5">
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <label for="country" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-5">
        {{ Form::text('country', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <label for="image" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-5">
        {{ Form::text('image', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-5">
        {{ Form::text('comment', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <label for="duration" class="col-sm-2 control-label">Duration</label>
    <div class="col-sm-5">
        {{ Form::text('duration', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-group">
    <label for="goal" class="col-sm-2 control-label">Goal</label>
    <div class="col-sm-5">
        {{ Form::text('goal', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <label for="video" class="col-sm-2 control-label">Video</label>
    <div class="col-sm-5">
        {{ Form::text('video', null, array('class' => 'form-control')) }}
    </div>
</div>