<div class="table-responsive">
    <table class="table" id="questions-table">
        <thead>
        <tr>
            <th>Questoin Text</th>
        <th>Image</th>
        <th>Score</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->questoin_text }}</td>
            <td>{{ $question->image }}</td>
            <td>{{ $question->score }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('questions.show', [$question->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('questions.edit', [$question->id]) }}"
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
