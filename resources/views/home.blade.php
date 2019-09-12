@extends('layouts.app')

@section('content')
  <div class="col-lg-8">
    @include('partials.welcome-card')

    <div class="row">
      @foreach($organizations as $organization)
        @component('components.org-card', ['organization' => $organization])
        @endcomponent
      @endforeach
    </div>

    @include('partials.special-thanks')
  </div>

  <div class="col-lg-4 mt-30 mt-lg-0">
    @include('partials.sidebar')
  </div>
@endsection
