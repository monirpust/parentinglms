<!-- Questoin Text Field -->
<div class="col-sm-12">
    {!! Form::label('questoin_text', 'Questoin Text:') !!}
    <p>{{ $question->questoin_text }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $question->image }}</p>
</div>

<!-- Score Field -->
<div class="col-sm-12">
    {!! Form::label('score', 'Score:') !!}
    <p>{{ $question->score }}</p>
</div>

