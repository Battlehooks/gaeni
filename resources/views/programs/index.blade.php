@extends('main.main')
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        @include('partials.program')
        <h1>Programs</h1>
        @include('programs.date.2022')
        @include('programs.date.2021')
    </div>
</div>

@endsection