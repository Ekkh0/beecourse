@extends('layout.mainlayout')
@section('title')@yield('titletitle')@endsection

@section('extracss')
@yield('extraextracss')
<style>
    body{
        min-height: 100vh;
        padding-bottom: 250px;
        position: relative;
    }
</style>
@endsection

@section('content')
<body>
    @include('components.navbar')
    @yield('contentcontent')
    @include('components.footer')
</body>
@endsection

@section('extrajs')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@yield('extraextrajs')
@endsection