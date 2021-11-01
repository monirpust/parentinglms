<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <p>Teachers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>Courses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('lessons.index') }}"
       class="nav-link {{ Request::is('lessons*') ? 'active' : '' }}">
        <p>Lessons</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('lessonvideos.index') }}"
       class="nav-link {{ Request::is('lessonvideos*') ? 'active' : '' }}">
        <p>Lessonvideos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('questions.index') }}"
       class="nav-link {{ Request::is('questions*') ? 'active' : '' }}">
        <p>Questions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('questionoptions.index') }}"
       class="nav-link {{ Request::is('questionoptions*') ? 'active' : '' }}">
        <p>Questionoptions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tests.index') }}"
       class="nav-link {{ Request::is('tests*') ? 'active' : '' }}">
        <p>Tests</p>
    </a>
</li>


