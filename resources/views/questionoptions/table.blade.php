<div class="table-responsive">
    <table class="table" id="questionoptions-table">
        <thead>
        <tr>
            <th>Option1</th>
        <th>Option2</th>
        <th>Correct</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questionoptions as $questionoption)
            <tr>
                <td>{{ $questionoption->option1 }}</td>
            <td>{{ $questionoption->option2 }}</td>
            <td>{{ $questionoption->correct }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['questionoptions.destroy', $questionoption->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('questionoptions.show', [$questionoption->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('questionoptions.edit', [$questionoption->id]) }}"
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
