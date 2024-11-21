@extends('layouts.main')
@section('main-content')
    <div class="h-40"></div>
    <div class="flex flex-wrap w-11/12 mx-auto">

        <div class="shadow-xl rounded-xl w-[49%] h-[77vh] p-16">
            <div class="flex flex-col gap-y-8 rtl-effect">
                <span class="uppercase text-5xl font-black ">Artists & More</span>
                <p class="text-lg text-black/60 font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.</p>
                <div class="flex flex-col justify-between w-1/2 mt-12 gap-6">
                    <div class="flex">
                        <span class="font-bold text-black/40 uppercase w-52">Category</span>
                        <p class="font-fold">Entertainment</p>
                    </div>
                    <div class="flex">
                        <span class="font-bold text-black/40 uppercase w-52">Location</span>
                        <p class="font-fold">Lebanon</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[2%]"></div>
        <div class="rounded-xl w-[49%] h-[77vh] relative overflow-hidden">
            <img class=" rounded-xl"
                src="{{ asset('assets/work-details/main.png') }}"
                alt="main img">
        </div>

        <div class="flex flex-col mt-40 mb-64 w-full items-center dtu-effect">
            <span class="font-black text-5xl uppercase mb-16">What Was Included</span>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 w-full">
                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.products-card', [
                    'gradient' => 'from-[#3A9E81] to-[#085A7F]',
                    'bgIcon' => 'assets/products/card2-cover.png',
                    'title' => 'OMNICHANNEL TICKETING SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.services-card', [
                    'direction' => 'vertical',
                    'img' => 'assets/icons/services/icon1.svg',
                    'title' => 'Consultancy',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent

                @component('components.services-card', [
                    'direction' => 'vertical',
                    'img' => 'assets/icons/services/icon2.svg',
                    'title' => 'Tech & Integrations',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>
        </div>

    </div>
@endsection
