@extends('layouts.app')

@section('content')
  <div class="col-lg-8">
    @include('partials.welcome-card')

    @livewire('show-organizations')

    @include('partials.special-thanks')
  </div>

  <div class="col-lg-4 mt-30 mt-lg-0">
    @include('partials.sidebar')
  </div>
@endsection
