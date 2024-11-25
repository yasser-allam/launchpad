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

        <div class="mx-auto absolute left-0 right-0 bottom-[20%] z-20">
            <div class="w-[60vw] pl-20">
                <div class="changing-text text-7xl font-black text-white uppercase leading-relaxed rtl-effect">
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
                <div class="mt-8 text-white/50 text-2xl font-semibold rtl-effect">Let’s Build Your
                    <strong class="font-black text-white"> Business</strong> Together
                </div>
            </div>


            <div class="flex flex-col gap-y-4 mt-16 ">

                <div id="maindiv" class="my-8">
                    <div id="div1">
                        @foreach (range(1, 3) as $index)
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon1.svg') }}">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon2.svg') }}">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon3.svg') }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div id="div2">
                        @foreach (range(1, 3) as $index)
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon1.svg') }}">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon2.svg') }}">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a target="_blank"
                                    class="block bg-[#FFFFFF]/10 rounded-xl asp asp-3-1">
                                    <img class="mx-auto my-auto !object-contain !w-[60%]"
                                        src="{{ asset('assets/icons/home/icon3.svg') }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>





        <div class="absolute left-0 right-0 bottom-0 h-[40vh] z-10 bg-gradient-to-b from-transparent to-black"></div>
    </div>





    <div class="w-full relative top-0 left-0 bg-black h-[2000px] homepage-cards">

        <section class="mt-8 bg-black sticky overflow-hidden top-0" style="align-self: flex-start;">


            <div class="flex flex-col items-center w-1/2 mx-auto gap-y-8 mt-10 dtu-effect">
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

            <ul class="flex gap-8 h-[600px] mt-24 mx-20">
                <li>
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                <li>
                    <div class="h-[500px] w-[500px] dtu-effect">
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
                <li>
                    <div class="h-[500px] w-[500px] dtu-effect">
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


    </div>


    {{-- <div class="h-[100vh] bg-red-500"></div> --}}


    <div class="h-screen my-32">


        {{-- <div class="flex w-full h-full">
            <div class="flex flex-col w-[46%] mx-20">
                <span class="text-5xl font-black uppercase whitespace-pre-line leading-relaxed my-16">
                    Our Services: Trusted.
                    Experienced. Skilled.</span>
                <div class="relative grid grid-cols-1 gap-4 overflow-y-auto snap-y h-[50%]">
                    <div data-title="1">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="2">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="3">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div>
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div>
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div class="sticky left-0 right-0 bottom-0 h-[10vh] z-10 bg-gradient-to-b from-transparent to-white">
                    </div>
                </div>


            </div>

            <div id="display" class="w-[50%] " data-id="1">

                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-1.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
])
                @endcomponent
            </div>

            <div id="display" class="w-[50%] hidden" data-id="2">

                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-2.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
])
                @endcomponent
            </div>

            <div id="display" class="w-[50%] hidden" data-id="3">

                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-3.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
])
                @endcomponent
            </div>

        </div> --}}




        {{-- THIS IS ALMOST WORKING --}}
        {{-- <div x-data="{ activeId: '1' }" class="flex w-full h-full">

            <div class="flex flex-col w-[46%] mx-20">
                <span class="text-5xl font-black uppercase whitespace-pre-line leading-relaxed my-16">
                    Our Services: Trusted. Experienced. Skilled.
                </span>
                <div class="relative grid grid-cols-1 gap-4 overflow-y-auto snap-y h-[50%]">
                    <div data-title="1" @mouseenter="activeId = '1'">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="2" @mouseenter="activeId = '2'">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="3" @mouseenter="activeId = '3'">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="2" @mouseenter="activeId = '2'">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                    <div data-title="1" @mouseenter="activeId = '1'">
                        @component('components.home-services-card', [
    'img' => 'assets/icons/home/home-services-icon-1.svg',
    'title' => 'Consultancy',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
])
                        @endcomponent
                    </div>
                </div>
            </div>


            <div class="w-[50%]"
                x-show="activeId === '1'"
                x-cloak>
                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-1.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
    'onHover' => 'home-services-image',
])
                @endcomponent
            </div>
            <div class="w-[50%]"
                x-show="activeId === '2'" x-cloak>
                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-2.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
    'onHover' => 'home-services-image',
])
                @endcomponent
            </div>
            <div class="w-[50%]"
                x-show="activeId === '3'" x-cloak>
                @component('components.image_asp.image', [
    'url' => 'assets/home/home-services-img-3.png',
    'alt' => 'img',
    'ratio' => '6-7',
    'classes' => '',
    'fit' => 'cover',
    'onHover' => 'home-services-image',
])
                @endcomponent
            </div>

        </div>
         --}}






        <div x-data="{ activeId: '1', hovered: false }" class="flex w-full h-full">

            <div class="flex flex-col w-[46%] mx-20">
                <span class="text-5xl font-black uppercase whitespace-pre-line leading-relaxed my-16">
                    Our Services: Trusted. Experienced. Skilled.
                </span>
                <div class="relative grid grid-cols-1 gap-4 overflow-y-auto snap-y h-[50%]">
                    <div data-title="1" @mouseenter="activeId = '1'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                    <div data-title="2" @mouseenter="activeId = '2'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                    <div data-title="3" @mouseenter="activeId = '3'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                    <div data-title="2" @mouseenter="activeId = '2'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                    <div data-title="1" @mouseenter="activeId = '1'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                    <div data-title="3" @mouseenter="activeId = '3'; hovered = true">
                        @component('components.home-services-card', [
                            'img' => 'assets/icons/home/home-services-icon-1.svg',
                            'title' => 'Consultancy',
                            'description' =>
                                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>


            <div class="w-[50%]"
                x-show="activeId === '1'"
                x-transition:enter="transition-transform ease-out duration-500"
                x-transition:enter-start="translate-y-[100%] opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"

                @transitionend="hovered = false"
                x-cloak>
                @component('components.image_asp.image', [
                    'url' => 'assets/home/home-services-img-1.png',
                    'alt' => 'img',
                    'ratio' => '6-7',
                    'classes' => '',
                    'fit' => 'cover',
                ])
                @endcomponent
            </div>

            <div class="w-[50%]"
                x-show="activeId === '2'"
                x-transition:enter="transition-transform ease-out duration-500"
                x-transition:enter-start="translate-y-[100%] opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"

                @transitionend="hovered = false"
                x-cloak>
                @component('components.image_asp.image', [
                    'url' => 'assets/home/home-services-img-2.png',
                    'alt' => 'img',
                    'ratio' => '6-7',
                    'classes' => '',
                    'fit' => 'cover',
                ])
                @endcomponent
            </div>

            <div class="w-[50%]"
                x-show="activeId === '3'"
                x-transition:enter="transition-transform ease-out duration-500"
                x-transition:enter-start="translate-y-[100%] opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"

                @transitionend="hovered = false"
                x-cloak>
                @component('components.image_asp.image', [
                    'url' => 'assets/home/home-services-img-3.png',
                    'alt' => 'img',
                    'ratio' => '6-7',
                    'classes' => '',
                    'fit' => 'cover',
                ])
                @endcomponent
            </div>
        </div>






    </div>






    <div class="flex flex-wrap justify-between w-11/12 mx-auto my-12">
        <span class="text-5xl font-black uppercase">Success stories</span>
        <p class="font-thin text-lg w-[30%] leading-relaxed">We excel in originality. Launchpad delivers quality-driven
            experiences and
            innovative
            solutions
            that uniquely
            boost customer engagement</p>
    </div>

    <div class="w-11/12 mx-auto">

        <div class="relative">
            @component('components.image_asp.image', [
                'url' => 'assets/home/success-image-1.png',
                'alt' => 'img',
                'ratio' => '5-2',
                'classes' => 'rounded-2xl',
                'fit' => 'cover',
            ])
            @endcomponent
            <div class="overlay-pink rounded-2xl"></div>
            <div class="w-[30%] absolute right-[5%] top-[10%]">
                @component('components.stories-card', [
                    'title' => 'ABC Group',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.',
                    'icon' => 'assets/icons/home/success-icon-1.svg',
                ])
                @endcomponent
            </div>
        </div>

        <div class="relative rotate-xy success-rotate-effect">
            @component('components.image_asp.image', [
                'url' => 'assets/home/success-image-2.png',
                'alt' => 'img',
                'ratio' => '5-2',
                'classes' => 'rounded-2xl',
                'fit' => 'cover',
            ])
            @endcomponent
            <div class="overlay-green rounded-2xl"></div>
            <div class="w-[30%] absolute right-[5%] top-[10%]">
                @component('components.stories-card', [
                    'title' => 'Iqos by Philip morris',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.',
                    'icon' => 'assets/icons/home/success-icon-2.svg',
                ])
                @endcomponent
            </div>
        </div>



    </div>


    <div
        class="w-11/12 mx-auto grid grid-cols-7 gap-8 shadow-xl rounded-xl p-10 bg-white justify-items-center justify-center transform translate-y-[50%]">
        <span class="uppercase text-3xl font-black  leading-relaxed">Our Trusted Partners</span>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon1.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'grayscale',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon2.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'grayscale',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon3.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'grayscale',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon4.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'grayscale',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon5.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'grayscale',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="w-[60%]">
            @component('components.image_asp.image', [
                'url' => 'assets/icons/home/b-icon6.svg',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => '',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
    </div>
@endsection




{{-- help with Let's grow --}}
{{-- help with building our legacy (about us) --}}
{{-- help with navbar --}}
{{-- ask about transfaring classes to scss and updating app.js --}}
