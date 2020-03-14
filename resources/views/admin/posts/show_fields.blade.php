<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/posts.fields.title').':') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/posts.fields.description').':') !!}
    <p>{{ $post->description }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', __('models/posts.fields.user_id').':') !!}
    <p>{{ $post->user_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/posts.fields.created_at').':') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/posts.fields.updated_at').':') !!}
    <p>{{ $post->updated_at }}</p>
</div>

