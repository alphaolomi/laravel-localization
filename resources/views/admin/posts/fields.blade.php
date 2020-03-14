<!-- Title Field -->
<div class="form-group col-md-6">
    {!! Form::label('title', __('models/posts.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('description', __('models/posts.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

{{-- <!-- User Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('user_id', __('models/posts.fields.user_id').':') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-md-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ URL::previous() }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
