@extends('layouts.main')
@section('main-content')
    <div id="cover"
        class="overflow-hidden h-[45vw] relative">
        @component('components.image_asp.image', [
            'url' => 'assets/services/main.png',
            'alt' => 'img',
            'ratio' => '2-1',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="overlay2"></div>
    </div>

    <div class="flex flex-col absolute top-1/3 left-24 w-[39%] gap-y-14">
        <h1 class="uppercase text-white text-7xl font-black">We’ve got you covered with our services.</h1>
        @component('components.button', [
            'name' => 'Work with us',
            'theme' => 'light',
        ])
        @endcomponent
        <div>
            <img src="{{ asset('assets/icons/products/oval.svg') }}" alt="icon">
        </div>
    </div>
@endsection
