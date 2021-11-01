<div class="table-responsive">
    <table class="table" id="tests-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Active</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tests as $test)
            <tr>
                <td>{{ $test->title }}</td>
            <td>{{ $test->description }}</td>
            <td>
                @if($test->active == 1)
                    <span class="text-success">Active</span>
                @else
                 <span class="text-danger">In-active</span>
                @endif
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['tests.destroy', $test->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tests.show', [$test->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tests.edit', [$test->id]) }}"
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
