@extends('layout.contentlayout')
@section('titletitle')Courses @endsection

@section('titletitle')
    @if(isset($results) && $results->count() > 0)
        Search Results
    @else
        Courses
    @endif
@endsection

@section('contentcontent')
    <div class="container mt-5">
        <div class="d-flex align-items-center mb-3">
            <form method="get" action="{{ url()->current() }}">
                {{ csrf_field() }}
                <select name="filter" class="form-select" onchange="this.form.submit()">
                    <option value="all" {{ request('filter') == 'all' ? 'selected' : '' }}>All Courses</option>
                    <option value="owned" {{ request('filter') == 'owned' ? 'selected' : '' }}>Owned Courses</option>
                    <option value="not_owned" {{ request('filter') == 'not_owned' ? 'selected' : '' }}>Not Owned Courses</option>
                </select>
            </form>
        </div>
        

        <h2 class="mb-4">
            {{ Request::is('Courses')? 'Popular Topics': 'Search Results' }}
        </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @forelse($results ?? $courses ?? [] as $course)
                @php
                    $user = Auth::user();
                    $owned = Auth::check() ? Auth::user()->Transaction()->whereHas('Transaction', function ($query) use ($course) {$query->where('course_id', $course->id);})->exists() : [];
                    $cart = session('cart', []);
                    $inCart = isset($cart[$course->id]);
                @endphp

                @if (!request('filter') || request('filter') == 'all' || (request('filter') == 'owned' && $owned) || (request('filter') == 'not_owned' && !$owned))
                    <div class="col">
                        <div class="card h-100 course-card">
                            <img src="{{$course->image_url}}" class="card-img-top" alt="..."
                                style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="card-body course-title-card">
                                <div class="title_desc" style="width: 65%; display: flex; flex-direction: column; justify-content: center; margin: 10px 0 10px 10px;">
                                    <h5 class="course-card-title">
                                        <div class="course-title shortened">
                                            {{$course->name}}
                                        </div>
                                    </h5>
                                    <p class="card-text course-descriptor">{{$course->description}}</p>
                                </div>
                                <div class="rating" style="width: 35%;">
                                    <span class="badge bg-primary rating-container">
                                        <iconify-icon icon="solar:star-bold" style="font-size: 22px;"></iconify-icon>
                                        {{$course->rating}}
                                    </span>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush"">
                                <li class="list-group-item" style="background-color: rgba(248, 249, 250, 0.65); color: #152039; border-color: #102770;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Price:</span>
                                        <span class="text-success">${{$course->price}}</span>
                                    </div>
                                </li>
                                <li class="list-group-item" style="background-color: rgba(248, 249, 250, 0.65); color: #152039">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Tutor:</span>
                                        <span>{{$course->tutor}}</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="display: flex; justify-content: space-between; align-items: center; background-color: rgba(248, 249, 250, 0.65);">
                                <a href="{{route('courses.getDetail', $course->id)}}" class="btn btn-primary">Detail</a>
                            
                                @if ($owned)
                                    <span class="btn btn-info disabled">Owned</span>
                                @elseif ($inCart)
                                    <span class="btn btn-success disabled">Added to Cart</span>
                                @else
                                    <form action="{{ route('cart.addToCart', ['courseId' => $course->id]) }}" method="post">
                                        @csrf
                                        @if (Auth::check())
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                        @else
                                        <a href="/register" class="btn btn-primary">Add to Cart</a>
                                        @endif
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <p>No courses found</p>

            @endforelse
        </div>
    </div>
    <span class="pt-3" style="display: flex; justify-content: center">
    @if(isset($results) && $results->count() > 0)
        {{ $results->links('pagination::bootstrap-4') }}
    @elseif(isset($courses) && $courses->count() > 0)
        {{ $courses->links('pagination::bootstrap-4') }}
    @else

    @endif
</span>
@endsection