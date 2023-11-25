@extends('layout.contentlayout')
@section('titletitle')
    Terms&Conditions
@endsection

@section('contentcontent')
   {{-- <h1>{{$content->course_id}}</h1> --}}

   {{-- @foreach ($content as $item)
    {{$item->id}}
   @endforeach --}}
   {{-- @while ($content->id == 0) --}}
   {{$content->course_id}}

   {{-- @endwhile --}}
@endsection
