{{-- @extends('layouts.main')
@section('main-content')
    <div class="relative w-full h-full">
        <video
            autoplay
            loop
            muted
            class="w-full max-h-[170vh] object-cover">
            <source
                src="{{ asset('assets/home/vertical-video-blue-fractal-light-wave-abstract-2024-04-17-17-42-03-utc.mp4') }}"
                type="video/mp4" />
        </video>
    </div>


    <div class="w-full h-[150vh] absolute top-0 left-0">
        <div class="h-[28%]"></div>

        <div class="w-11/12 mx-auto">
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
        <div class="flex gap-8 w-screen my-32">
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon1.svg',
])
            @endcomponent
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon2.svg',
])
            @endcomponent
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon3.svg',
])
            @endcomponent
        </div>



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








        <div class="overflow-x-scroll snap-x snap-mandatory absolute -bottom-96 left-[4.2%]">


            <div class="w-full h-[500px] flex gap-x-4">


                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent


            </div>



        </div>



    </div>
    <div class="h-[200vh] bg-red-500"></div>
@endsection --}}


@extends('layouts.main')
@section('main-content')
    <div class="h-screen">
        <div class="absolute w-full h-full z-0">
            <video
                autoplay
                loop
                muted
                class="w-full h-screen object-cover">
                <source
                    src="{{ asset('assets/home/vertical-video-blue-fractal-light-wave-abstract-2024-04-17-17-42-03-utc.mp4') }}"
                    type="video/mp4" />
            </video>
        </div>

        <div class="mx-auto absolute  left-0 right-0 px-12 bottom-[20%] z-20">
            <div class="w-[55vw]">
                <div class="changing-text text-7xl font-black text-white uppercase leading-relaxed effect1">
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
                <div class="mt-8 text-white/50 text-2xl font-semibold effect1">Let’s Build Your
                    <strong class="font-black text-white"> Business</strong> Together
                </div>
            </div>
        </div>


        <div class="absolute left-0 right-0 bottom-0 h-[40vh] z-10 bg-gradient-to-b from-transparent to-black"></div>
    </div>





    <div class="w-full relative top-0 left-0 bg-black h-[2000px] homepage-cards">
        {{-- <div class="flex gap-8 w-screen">
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon1.svg',
])
            @endcomponent
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon2.svg',
])
            @endcomponent
            @component('components.home-page-mini-card-banner', [
    'icon' => 'assets/icons/home/icon3.svg',
])
            @endcomponent
        </div> --}}

        <section class="mt-8 bg-black sticky overflow-hidden top-0" style="align-self: flex-start;">


            <div class="flex flex-col items-center w-1/2 mx-auto gap-y-8 effect2">
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

            <ul class="flex gap-8 h-[600px] mt-24">
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 1',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 2',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 3',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 4',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 5',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
                <li>
                    <div class="h-[500px] w-[500px] effect2">
                        @component('components.products-card', [
                            'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                            'bgIcon' => 'assets/products/card1-cover.png',
                            'title' => '‘HEYA’ ECOMMERCE SOLUTION 6',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                        @endcomponent
                    </div>
                </li>
            </ul>
        </section>








        {{-- @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent
                @component('components.products-card', [
    'gradient' => 'from-[#372B75] to-[#2BA4E3]',
    'bgIcon' => 'assets/products/card1-cover.png',
    'title' => '‘HEYA’ ECOMMERCE SOLUTION',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
])
                @endcomponent


        </div>



        </div> --}}



    </div>
    <div class="h-[200vh] bg-red-500"></div>
@endsection
