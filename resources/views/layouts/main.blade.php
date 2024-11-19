@extends('layouts.master')
@section('master-head')
    @yield('main-head')
@endsection
@section('master-content')
    <div class="header">
        @include('partials.header')
    </div>
    <main class="flex flex-col flex-grow">
        @yield('main-content')
    </main>

    <div class="footer">
        @include('partials.footer')
    </div>
@endsection
