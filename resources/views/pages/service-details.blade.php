{{-- @extends('layouts.main')
@section('main-content')
    <div id="cover"
        class="overflow-hidden h-[35vw] relative mb-20">
        @component('components.image_asp.image', [
    'url' => 'assets/service-details/background.png',
    'alt' => 'img',
    'ratio' => '1-1',
    'classes' => '',
    'fit' => 'cover',
])
        @endcomponent
        <div class="absolute left-24 top-[25%] w-full">
            <div class="flex flex-col w-[40%] gap-y-14">
                <h1 class="uppercase text-white text-7xl font-black">Tech & Integrations</h1>
                <p class="text-white text-xl ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id
                    volutpat
                    lacus
                    laoreet.</p>
                @component('components.button', [
    'name' => 'Start Your Project',
    'theme' => 'light',
])
                @endcomponent

            </div>
        </div>
        <div class="absolute right-24 w-[35%] top-[25%] ">
            @component('components.image_asp.image', [
    'url' => 'assets/service-details/main.png',
    'alt' => 'img',
    'ratio' => '5-3',
    'classes' => 'rounded-xl',
    'fit' => 'cover',
])
            @endcomponent
        </div>
    </div>



    <div class="h-screen"></div>
@endsection --}}


@extends('layouts.main')
@section('main-content')
    <div id="cover"
        class="overflow-hidden h-[35vw] relative mb-20">
        @component('components.image_asp.image', [
            'url' => 'assets/service-details/background.png',
            'alt' => 'img',
            'ratio' => '1-1',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="absolute left-24 top-[25%] w-full">
            <div class="flex flex-col w-[40%] gap-y-14">
                <h1 class="uppercase text-white text-7xl font-black">Tech & Integrations</h1>
                <p class="text-white text-xl ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id
                    volutpat
                    lacus
                    laoreet.</p>
                @component('components.button', [
                    'name' => 'Start Your Project',
                    'theme' => 'light',
                ])
                @endcomponent

            </div>
        </div>
        <div class="absolute right-24 w-[35%] top-[25%] ">
            @component('components.image_asp.image', [
                'url' => 'assets/service-details/main.png',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'rounded-xl',
                'fit' => 'cover',
            ])
            @endcomponent
        </div>
    </div>


    <div class="w-11/12 mx-auto flex flex-col gap-y-10">
        <span class="text-5xl font-bold uppercase leading-relaxed w-1/2">Offering multiple services from our talented
            team</span>
        <p class="text-xl w-1/2 font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.</p>

        <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-10 gap-10">
            @component('components.service-details-card', [
                'svg' => 'assets/icons/service-details/icon1.svg',
                'title' => 'UI/UX Design',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
            ])
            @endcomponent
            @component('components.service-details-card', [
                'svg' => 'assets/icons/service-details/icon2.svg',
                'title' => 'Web Development',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
            ])
            @endcomponent
            @component('components.service-details-card', [
                'svg' => 'assets/icons/service-details/icon3.svg',
                'title' => 'API Integrations',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
            ])
            @endcomponent
            @component('components.service-details-card', [
                'svg' => 'assets/icons/service-details/icon4.svg',
                'title' => 'Hosting',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
            ])
            @endcomponent
            @component('components.service-details-card', [
                'svg' => 'assets/icons/service-details/icon5.svg',
                'title' => 'SEO',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
            ])
            @endcomponent

        </div>
        <div class="h-screen"></div>
    @endsection
