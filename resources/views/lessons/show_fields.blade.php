<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $lesson->title }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $lesson->slug }}</p>
</div>

<!-- Lesson Image Field -->
<div class="col-sm-12">
    {!! Form::label('lesson_image', 'Lesson Image:') !!}
    <p>{{ $lesson->lesson_image }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $lesson->description }}</p>
</div>

<!-- Active Field -->
<div class="col-sm-12">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $lesson->active }}</p>
</div>

