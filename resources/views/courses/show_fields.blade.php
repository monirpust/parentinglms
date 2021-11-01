<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $course->title }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $course->slug }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- Teachers Field -->
<div class="col-sm-12">
    {!! Form::label('teachers', 'Teachers:') !!}
    <p>{{ $course->teachers }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $course->price }}</p>
</div>

<!-- Course Image Field -->
<div class="col-sm-12">
    {!! Form::label('course_image', 'Course Image:') !!}
    <p>{{ $course->course_image }}</p>
</div>

<!-- Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $course->start_date }}</p>
</div>

