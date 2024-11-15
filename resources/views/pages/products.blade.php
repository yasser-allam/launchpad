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


    <div class="w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-20 mb-10 gap-10">
        @component('components.products-card', [
            'color1' => '#372b75',
            'color2' => '#2ba4e3',
            'bgIcon' => 'assets/products/card1-cover.png',
            'title' => '‘HEYA’ ECOMMERCE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#3A9E81',
            'color2' => '#085A7F',
            'bgIcon' => 'assets/products/card2-cover.png',
            'title' => 'OMNICHANNEL TICKETING SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#372B75',
            'color2' => '#8F78FA',
            'bgIcon' => 'assets/products/card3-cover.png',
            'title' => '‘HEYA’ Q-COMMERCE SUPERMARKET SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#3A9E81',
            'color2' => '#9878EF',
            'bgIcon' => 'assets/products/card4-cover.png',
            'title' => '‘HEYA’ CORPORATE WEBSITE SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
    </div>

    <div class="w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        @component('components.products-card', [
            'color1' => '#372b75',
            'color2' => '#2ba4e3',
            'bgIcon' => 'assets/products/card5-cover.png',
            'title' => '‘HEYA’ LOYALTY SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#372b75',
            'color2' => '#2ba4e3',
            'bgIcon' => 'assets/products/card6-cover.png',
            'title' => 'DRIVER SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#372b75',
            'color2' => '#2ba4e3',
            'bgIcon' => 'assets/products/card7-cover.png',
            'title' => 'Shipments Returns Module',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
        @component('components.products-card', [
            'color1' => '#372b75',
            'color2' => '#2ba4e3',
            'bgIcon' => 'assets/products/card8-cover.png',
            'title' => 'WAREHOUSE MANAGEMENT SYSTEM SOLUTION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ])
        @endcomponent
    </div>
    <div class="h-64"></div>
@endsection
