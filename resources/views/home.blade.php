@extends('layouts.app')

@section('content')
  <div class="col-lg-8">
    @include('partials.welcome-card')

    <div id="app">

        <organization :data="{{ json_encode($organizations) }}"></organization>

    </div>

    @include('partials.special-thanks')
  </div>

  <div class="col-lg-4 mt-30 mt-lg-0">
    @include('partials.sidebar')
  </div>
@endsection
