@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/courses.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['admin.courses.update', $course->id], 'method' => 'patch']) !!}

                        @include('admin.courses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
