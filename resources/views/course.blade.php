@extends('layout.contentlayout')
@section('titletitle')Courses @endsection

@section('contentcontent')
    <div class="container mt-5">
        <h2 class="mb-4">Popular Topics</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            @foreach($courses as $course)
                <div class="col">
                    <div class="card h-100">
                        <img src="image/nlp.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{$course->name}}</h5>
                            <p class="card-text course-descriptor">{{$course->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary"><i class="bi bi-star"></i> 4.7</span>
                                    <span class="text-muted">Average Rating</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Price:</span>
                                    <span class="text-success">${{$course->price}}</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Tutor:</span>
                                    <span>John Doe</span>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{route('clustering-classification-content', $course->id)}}" class="btn btn-primary">Detail</a>
                            @php
                                $cart = session('cart', []);
                            @endphp
                            @if(isset($cart[$course->id]))
                                <span class="btn btn-success disabled">Added to Cart</span>
                            @else
                                <form action="{{ route('cart.addToCart', ['courseId' => $course->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            @endif

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <span class="pt-3" style="display: flex; justify-content: center">
            {{ $courses->links('pagination::bootstrap-4') }}
        </span>
    </div>
@endsection
