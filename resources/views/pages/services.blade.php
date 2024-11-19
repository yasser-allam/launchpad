@extends('layouts.main')
@section('main-content')
    <div id="cover"
        class="overflow-hidden h-[45vw] relative mb-20">
        @component('components.image_asp.image', [
            'url' => 'assets/services/main.png',
            'alt' => 'img',
            'ratio' => '2-1',
            'classes' => 'mix-blend-luminosity',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="overlay"></div>
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

    <div class="w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-10 gap-10">

        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon1.svg',
            'title' => 'Consultancy',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent

        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon2.svg',
            'title' => 'Tech & Integrations',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon3.svg',
            'title' => 'DIGITAL CHANNELS SETUP',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon4.svg',
            'title' => 'ONLINE STORES MANAGEMENT',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon5.svg',
            'title' => 'Product photography',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon6.svg',
            'title' => 'Social media management',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon7.svg',
            'title' => 'SOCIAL Commerce',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon8.svg',
            'title' => 'Digital marketing',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon9.svg',
            'title' => 'Fullfillment',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon10.svg',
            'title' => 'RECONCILIATION',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent
        @component('components.services-card', [
            'direction' => 'horizontal',
            'img' => 'assets/icons/services/icon11.svg',
            'title' => 'Customer Support',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
        ])
        @endcomponent

    </div>


    <div class="h-64 w-full"></div>
@endsection
