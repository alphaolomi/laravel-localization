<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>@lang('models/posts.fields.title')</th>
        <th>@lang('models/posts.fields.description')</th>
        {{-- <th>@lang('models/posts.fields.user_id')</th> --}}
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            {{-- <td>{{ $post->user_id }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
