@extends('main.main')
@section('content')

<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3 mb-5">Categories</h6>
        </div>
        <div class="row g-6 justify-content-md-center mb-3">
            {{-- metavers --}}
            @include('events.lks.meta')
            {{-- story telling --}}
            @include('events.lks.stortell')
            {{-- Data Science --}}
            @include('events.lks.ds')
            @include('events.lks.ds')
            @include('events.lks.ds')
            @include('events.lks.ds')
        </div>
        {{-- new rows in 1 section --}}
        <div class="row g-4 justify-content-md-center mb-3">
            @include('events.lks.spw')
        </div>
    </div>
</div>
@endsection
