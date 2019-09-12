@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        @include('partials.welcome-card')

        <div class="row">
            @include('components.org-details-card')
        </div>
    </div>

    <div class="col-lg-4 mt-30 mt-lg-0">
        @include('partials.sidebar')
    </div>
@endsection
