<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/courses.fields.name').':') !!}
    <p>{{ $course->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/courses.fields.description').':') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- Duration Field -->
<div class="form-group">
    {!! Form::label('duration', __('models/courses.fields.duration').':') !!}
    <p>{{ $course->duration }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/courses.fields.created_at').':') !!}
    <p>{{ $course->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/courses.fields.updated_at').':') !!}
    <p>{{ $course->updated_at }}</p>
</div>

