@extends('layout.mainlayout')
@section('title')@yield('titletitle')@endsection

@section('extracss')
<style>
    body{
        min-height: 100vh;
        padding-bottom: 250px;
        position: relative;
        padding-top: 67px;
    }
</style>
<link rel="stylesheet" href="\css\home.css">
@yield('extraextracss')
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>@yield('extraextrajs')
<script>
    function scrollTitle(num) {
        console.log('terjalan!');
        document.getElementById("coursetitle").style.marginLeft = "-1000px";
    }
</script>
@endsection