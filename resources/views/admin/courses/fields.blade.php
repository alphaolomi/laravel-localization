<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/courses.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/courses.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', __('models/courses.fields.duration').':') !!}
    {!! Form::date('duration', null, ['class' => 'form-control','id'=>'duration']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#duration').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.courses.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
