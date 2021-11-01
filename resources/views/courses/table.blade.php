<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Teachers</th>
        <th>Price</th>
        <th>Course Image</th>
        <th>Start Date</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
            <td>{{ $course->slug }}</td>
            <td>{{ $course->description }}</td>
            <td>{{ $course->teachers }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->course_image }}</td>
            <td>{{ $course->start_date }}</td>
            <td>
                @if($course->status == 1)
                    <span class="text-success">Active</span>
                @else
                 <span class="text-danger">In-active</span>
                @endif

            </td>
                <td width="120">
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('courses.edit', [$course->id]) }}"
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
