@extends('layouts.master')

@section('content')

  <div class="container">
    <div id="new">
      <h1>404 - Not Found</h1>
      <h2>Sorry @if(is_object(Auth::user())){{ Auth::user()->fname}} @endif, aint nothin' here.</h2>
      <p>Yeah, there might have been something here, but it probably moved or got deleted.</p>
      <p>If you believe this an error, contact the developer at <a href="tel:0279258384">027 925 8384</a>.</p>
    </div>
  </div>

@endsection
