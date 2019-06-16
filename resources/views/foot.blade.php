@extends('layout.header')

@section("content")

<div class="info" data-info="index"></div>
<div class="table">

   @foreach($res as $key)
    <div class="titre">

    <div class="c0"><span >{{$key->match_status}}</span></div>
    <div class="c1"><span >{{$key->match_time}}</span></div>
    <div class="c2"><span >{{$key->match_hometeam_name}}</span></div>
    <div class="c3"><span >{{$key->match_hometeam_score}}</span></div>
    <div class="c4"><span >{{$key->match_awayteam_score}}</span></div>
    <div class="c5"><span >{{$key->match_awayteam_name}}</span></div>


    </div>
@endforeach

</div>


@endsection