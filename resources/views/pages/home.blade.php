@extends('layouts.main')
@section('main-content')
    <div class="w-full h-[150vh] relative">
        <div class="bg-purple-200 h-[28%]"></div>

        <div class="w-11/12 mx-auto mb-20">
            <div class="w-[60%]">
                <div class="changing-text text-7xl font-black text-white uppercase leading-loose">
                    Powering Your Business In
                    <div class="texts-container">
                        <span class="text-7xl font-black">
                            Development<br />
                            Operations<br />
                            Innovation<br />
                            Transformation
                        </span>
                    </div>
                </div>
                <span class="text-white/50 text-2xl font-semibold">Let’s Build Your
                    <strong class="font-black text-white"> Business</strong> Together</span>
            </div>
        </div>

        {{-- CAROUSEL HERE --}}

        <div class="flex flex-col items-center w-1/2 mx-auto gap-y-8">
            <span class="text-7xl font-black text-white uppercase">Let’s Grow Your </span>
            <span class="text-7xl font-black text-white uppercase">Business Together</span>
            <div class="text-xl font-thin text-white flex flex-col items-center">
                <p>We excel in originality. Launchpad delivers quality-driven</p>
                <p> experiences and innovative solutions that uniquely boost</p>
                <p> customer engagement</p>
            </div>
            @component('components.button', [
                'name' => 'Start Your Project',
                'theme' => 'light',
            ])
            @endcomponent
        </div>
        {{-- overflow-x-scroll snap-x  --}}
        <div class="overflow-x-scroll snap-x snap-mandatory absolute -bottom-60 left-[4.2%]">
            <div class="w-full h-[500px] flex gap-x-4">


                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent
                @component('components.products-card', [
                    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                    'bgIcon' => 'assets/products/card1-cover.png',
                    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ])
                @endcomponent


            </div>
        </div>


    </div>
    <div class="h-[200vh] bg-red-500"></div>
@endsection
