@extends('layouts.main')
@section('main-content')
    <div class="overflow-hidden h-[50vh] relative ">
        @component('components.image_asp.image', [
            'url' => 'assets/service-details/bg-image.png',
            'alt' => 'img',
            'ratio' => '5-2',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="flex flex-col w-3/5 mx-auto items-center absolute top-[30%] left-[20%] text-white">
            <span class="text-7xl font-black uppercase mb-20">Let’s connect</span>
            <div class="flex justify-between gap-x-8">

                <div class="w-full h-full relative">
                    <img src="{{ asset('assets/contact-us/header-card-1.png') }}" alt="">
                    <div class="absolute top-1/3 left-[10%] flex flex-col gap-4">
                        <span class="text-xl font-bold uppercase">Contact Business</span>
                        <p class="text-base font-thin">+961 1 485 075</p>
                    </div>
                </div>
                <div class="w-full h-full relative">
                    <img src="{{ asset('assets/contact-us/header-card-1.png') }}" alt="">
                    <div class="absolute top-1/3 left-[10%] flex flex-col gap-4">
                        <span class="text-xl font-bold uppercase">Email Address</span>
                        <p class="text-base font-thin">info@launchpad.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="flex flex-col items-center w-1/3 mx-auto gap-y-8 mt-20">
        <span class="text-5xl font-black uppercase">Our presence Around</span>
        <span class="text-5xl font-black uppercase">the world</span>
    </div>
    <div class="w-11/12 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-8">

            @component('components.location-card', [
                'img' => 'assets/contact-us/location1.png',
                'country' => 'Lebanon',
                'phone' => '+961 1 485 075',
                'location' => 'Aramex Building, 1st Floor, Mirna Chalouhi Highway – Lebanon',
                'location_link' => '/',
            ])
            @endcomponent
            @component('components.location-card', [
                'img' => 'assets/contact-us/location2.png',
                'country' => 'UAE',
                'phone' => '+961 1 485 075',
                'location' => 'Location Goes Here',
                'location_link' => '/',
            ])
            @endcomponent
            @component('components.location-card', [
                'img' => 'assets/contact-us/location3.png',
                'country' => 'Lebanon',
                'phone' => '+961 1 485 075',
                'location' => 'Location Goes Here',
                'location_link' => '/',
            ])
            @endcomponent

        </div>
        <div class="w-[40%] mx-auto mt-32">
            <livewire:contact-form />
        </div>
        <div class="w-4/5 mx-auto mb-48">
            <span class="text-5xl font-black uppercase mb-8 flex flex-col items-center">Frequently Asked Questions</span>
            <div class="flex flex-col gap-4">
                @component('components.faq-banner', [
                    'question' => 'Question Goes Here',
                ])
                @endcomponent
                @component('components.faq-banner', [
                    'question' => 'Question Goes Here',
                ])
                @endcomponent
                @component('components.faq-banner', [
                    'question' => 'Question Goes Here',
                ])
                @endcomponent
                @component('components.faq-banner', [
                    'question' => 'Question Goes Here',
                ])
                @endcomponent
                @component('components.faq-banner', [
                    'question' => 'Question Goes Here',
                ])
                @endcomponent
            </div>
        </div>




    </div>
@endsection
