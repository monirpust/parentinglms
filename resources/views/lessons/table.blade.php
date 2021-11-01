<div class="table-responsive">
    <table class="table" id="lessons-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Slug</th>
        <th>Lesson Image</th>
        <th>Description</th>
        <th>Active</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lessons as $lesson)
            <tr>
                <td>{{ $lesson->title }}</td>
            <td>{{ $lesson->slug }}</td>
            <td>{{ $lesson->lesson_image }}</td>
            <td>{{ $lesson->description }}</td>
            <td>{{ $lesson->active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['lessons.destroy', $lesson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lessons.show', [$lesson->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('lessons.edit', [$lesson->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
