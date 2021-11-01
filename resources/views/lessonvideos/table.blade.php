<div class="table-responsive">
    <table class="table" id="lessonvideos-table">
        <thead>
        <tr>
            <th>Videofile</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lessonvideos as $lessonvideo)
            <tr>
                <td>{{ $lessonvideo->videofile }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['lessonvideos.destroy', $lessonvideo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lessonvideos.show', [$lessonvideo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('lessonvideos.edit', [$lessonvideo->id]) }}"
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
