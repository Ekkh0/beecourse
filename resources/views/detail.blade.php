@extends('layout.contentlayout')
@section('titletitle')
Clustering & Classification With Machine Learning In Python
@endsection

@section('extraextracss')
    <style>
        .header-card {
            background-color: #777;
            color: white;
            padding: 20px;
        }

        .course-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .dropdown-menu a {
            text-decoration: none !important;
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa !important;
        }
    </style>

    <link rel="stylesheet" href="/css/contents.css">
@endsection

@section('contentcontent')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Header Card -->
                <div class="card header-card">
                    <div class="card-body">
                        <h2 class="card-title">{{$course->name}}</h2>
                        <p class="card-text">{{$course->description}}</p>
                        <p class="card-text"><strong>Instructor:</strong> {{$course->tutor}}</p>
                        <p class="card-text"><strong>Price:</strong> ${{$course->price}}</p>
                    </div>
                </div>

                <!-- What You Will Learn -->
                {{-- <div class="card mt-4">
                    <div class="card-body">
                        <h3>What You Will Learn</h3>
                        <ul>
                            <li><span class="course-icon">&#128218;</span>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Voluptas, asperiores.</li>
                            <li><span class="course-icon">&#128214;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.</li>
                            <li><span class="course-icon">&#128220;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                            <li><span class="course-icon">&#128172;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                            <li><span class="course-icon">&#128187;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <!-- Course Includes -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Course Includes</h3>
                        <p><span class="course-icon">&#128249;</span> Total Chapters: {{$chapters->count()}}</p>
                    </div>
                </div>

                <div class="card mt-4">
                    <div id="accordion">
                        @foreach($chapters as $chapter)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{$chapter->id}}" style="text-decoration: none;">
                                    {{$chapter->title_content}}
                                </button>
                                </h5>
                            </div>
                        
                            <div id="collapse{{$chapter->id}}" class="collapse">
                                <iframe width="100%" height="450" src="{{$chapter->course_url}}" frameborder="0"></iframe>
                                <div class="card-body">
                                    {{$chapter->description}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('extraextrajs')
<script>
    $(document).on('click',function(){
        $('.collapse').collapse('hide');
    })
</script>
@endsection