
<div>
    <div class="card">
        <div class="card-header text-center">Management Dashboard</div>
    </div>

    <div class="bg-white m-0 p-0">
        <div class="d-flex justify-content-center">
            <div class="m-2">
                <a class="btn btn-primary btn-block" href="#">Instructors</a>
            </div>
            <div class="m-2">
                <a class="btn btn-primary btn-block" href="#">Students</a>
            </div>
            <div class="m-2">
                <a class="btn btn-primary btn-block" href="/lessons/{{ Auth::user()->id }}">Lessons</a>
            </div>
        </div>
    </div>
</div>