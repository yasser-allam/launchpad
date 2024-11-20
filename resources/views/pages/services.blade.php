@extends('layouts.main')
@section('main-content')
    @component('components.head-banner', [
        'img' => 'assets/services/main.png',
        'text' => 'We’ve got you covered with our services.',
    ])
    @endcomponent

    <div id="next" class="w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-10 gap-10">

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
