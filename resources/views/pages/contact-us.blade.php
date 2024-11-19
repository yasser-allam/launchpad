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
    </div>
    <div class="flex flex-col w-3/5 mx-auto items-center">
        <span class="text-7xl font-black uppercase text-red-800">Let’s connect</span>
        <div class="flex justify-between">
            <img src="{{ asset('assets/contact-us/header-card-1.png') }}" alt="">
            <img src="{{ asset('assets/contact-us/header-card-2.png') }}" alt="">
        </div>
    </div>

    <div class="h-screen bg-green-300"></div>
    <div class="flex flex-col items-center w-1/3 mx-auto gap-y-8">
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

        <livewire:contact-form />

        <div class="w-4/5 mx-auto mb-48">
            <span class="text-7xl font-black uppercase mb-8 flex flex-col items-center">Frequently Asked Questions</span>
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
