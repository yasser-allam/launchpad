@extends('layouts.main')
@section('main-content')
    <div id="cover"
        class="overflow-hidden h-[45vw] relative">
        @component('components.image_asp.image', [
            'url' => 'assets/products/main.png',
            'alt' => 'img',
            'ratio' => '2-1',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="overlay2"></div>
    </div>
    <div class="flex flex-col absolute top-1/3 left-24 w-[40%] gap-y-14">
        <h1 class="uppercase text-white text-7xl font-black">A one-stop-shop for your digital products</h1>
        @component('components.button', [
            'name' => 'Work with us',
            'theme' => 'light',
        ])
        @endcomponent
        <div>
            <img src="{{ asset('assets/icons/products/oval.svg') }}" alt="icon">
        </div>
    </div>


    <div class="w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  mt-20">
        @component('components.products-card', [
            'bgImg' => 'assets/products/card1.png',
            'bgIcon' => 'assets/products/card1-cover.png',
            'title' => '‘HEYA’ ECOMMERCE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'bgImg' => 'assets/products/card1.png',
            'bgIcon' => 'assets/products/card1-cover.png',
            'title' => '‘HEYA’ ECOMMERCE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'bgImg' => 'assets/products/card1.png',
            'bgIcon' => 'assets/products/card1-cover.png',
            'title' => '‘HEYA’ ECOMMERCE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'bgImg' => 'assets/products/card1.png',
            'bgIcon' => 'assets/products/card1-cover.png',
            'title' => '‘HEYA’ ECOMMERCE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent

        {{-- <div class="absolute top-0 left-0 overflow-hidden ">

            @component('components.image_asp.image', [
    'url' => 'assets/products/card1-cover.png',
    'alt' => 'card-icon img',
    'ratio' => '5-6',
    'classes' => '',
    'fit' => 'cover',
])
            @endcomponent
        </div> --}}


    </div>

    <div class="w-full h-screen"></div>
@endsection

{{-- <div class="overflow-hidden rounded-2xl mb-6 relative">
    @component('components.image_asp.image', [
    'url' => 'assets/about-us/how-we-do-it.png',
    'alt' => 'how we do it img',
    'ratio' => '2-1',
    'classes' => '',
    'fit' => 'cover',
])
    @endcomponent
    <div class="overlay"></div>
</div> --}}
