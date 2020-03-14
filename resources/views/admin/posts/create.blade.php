@extends('layouts.app')

@section('content')

<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="card card-primary">
        <div class="card-header">
            @lang('models/posts.singular')
        </div>
        <div class="card-body">
            <div class="row">
                {!! Form::open(['route' => 'admin.posts.store']) !!}

                    @include('admin.posts.fields')
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
