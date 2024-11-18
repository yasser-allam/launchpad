@extends('layouts.main')
@section('main-content')
    <div class="main-container mt-40" data-aos="fade-up">
        <h1 class="uppercase text-7xl mb-16">Welcome To <strong class="blue">Launchpad</strong></h1>

        <div class="flex justify-between mb-32">
            <div class="relative flex flex-col transform translate-x-32">
                <div class="overflow-hidden h-[700px] w-[700px]">
                    @component('components.image_asp.image', [
                        'url' => 'assets/about-us/main.png',
                        'alt' => 'img',
                        'ratio' => '1-1',
                        'classes' => 'rounded-3xl',
                        'fit' => 'cover',
                    ])
                    @endcomponent
                </div>
                <div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute -left-16 top-12"
                    data-aos="fade-left">
                    <img src="{{ asset('assets/icons/about-us/icon1.svg') }}" alt="how we do it img">
                    <h2 class="uppercase text-lg font-extrabold">Industry Experts</h2>
                </div>
                <div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute -right-20 top-40"
                    data-aos="fade-right">
                    <img src="{{ asset('assets/icons/about-us/icon2.svg') }}" alt="how we do it img">
                    <p class="uppercase text-lg font-extrabold">ISO Certified</p>
                </div>
                <div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute -left-32 top-72"
                    data-aos="fade-left">
                    <img src="{{ asset('assets/icons/about-us/icon3.svg') }}" alt="how we do it img">
                    <p class="uppercase text-lg font-extrabold">Fully Customized Services</p>
                </div>
                <div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute -right-32 bottom-32"
                    data-aos="fade-right">
                    <img src="{{ asset('assets/icons/about-us/icon4.svg') }}" alt="how we do it img">
                    <p class="uppercase text-lg font-extrabold">Proven Track Records</p>
                </div>
                <div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute -left-20 bottom-14"
                    data-aos="fade-left">
                    <img src="{{ asset('assets/icons/about-us/icon5.svg') }}" alt="how we do it img">
                    <p class="uppercase text-lg font-extrabold">Goal Oriented</p>
                </div>
            </div>
            <div class="flex flex-col w-1/2 mt-32 transform translate-x-36 ">
                <h2 class="uppercase text-3xl font-black text-extrabold mb-6" data-aos="fade-up">Our Story</h2>
                <p class="font-thin w-2/3" data-aos="fade-up">
                    After 14 years abroad, Bernadette returned home with a mission to transform the local
                    e-commerce landscape.
                    <br>
                    <br>
                    In 2018, she founded e-mood, driven by a passion for innovation, a desire to establish herself as an
                    independent leader in the digital world.
                    <br>
                    <br>
                    Bernadette’s focus on addressing local market challenges and fostering a culture of teamwork has set
                    e-mood apart as the leading provider of end-to-end digital and operational solutions in the region.
                    <br>
                    <br>

                    Every goal she set was met - from obtaining ISO certification to expanding into the GCC.
                    <br>
                    <br>

                    Our journey is one of growth, resilience and solid commitment to empowering businesses to reach their
                    full potential.
                    <br>
                    <br>

                    At e-mood, we don’t just meet challenges; we transform them into opportunities.
                </p>
            </div>
        </div>
    </div>

    <div class="w-full flex mb-20 text-white">
        <div class="bg-black w-1/2">
            {{-- p-22~ so p-20 or p-24 below --}}
            <div class="flex flex-col p-[4.3vw] gap-y-8">
                <div class="overflow-hidden rounded-2xl mb-6 relative "data-aos="fade-up">
                    @component('components.image_asp.image', [
                        'url' => 'assets/about-us/how-we-do-it.png',
                        'alt' => 'how we do it img',
                        'ratio' => '2-1',
                        'classes' => '',
                        'fit' => 'cover',
                    ])
                    @endcomponent
                    <div class="overlay"></div>
                </div>
                <h2 class="text-3xl font-extrabold" data-aos="fade-up">How We Do It</h2>
                <p class="font-light " data-aos="fade-up">We specialize in providing comprehensive e-commerce consultancy by
                    fully
                    understanding your operations
                    and business goals. We assess your online presence and check the foundations for a successful launch. By
                    addressing gaps and suggesting efficient solutions, we work collaboratively with your team to ensure
                    revenue generation to your business through our services. To be able to maintain the stability of the
                    revenue generated, we focus on providing a premium after-sale service to ensure growth stability.</p>
            </div>
        </div>
        <div class="bg-[#3A3A3A] w-1/2">
            <div class="flex flex-col p-[4.3vw] gap-y-8">
                <div class="overflow-hidden rounded-2xl mb-6 relative" data-aos="fade-up">
                    @component('components.image_asp.image', [
                        'url' => 'assets/about-us/why-we-do-it.png',
                        'alt' => 'why we do it img',
                        'ratio' => '2-1',
                        'classes' => '',
                        'fit' => 'cover',
                    ])
                    @endcomponent
                    <div class="overlay"></div>
                </div>

                <h2 class="text-3xl font-extrabold" data-aos="fade-up">Why We Do It</h2>
                <p class="font-light" data-aos="fade-up">As a team of passionate experts in technology and operations, we’re
                    excited to apply
                    our in-depth
                    knowledge to enhance your business at its core.</p>
            </div>
        </div>

    </div>
    <div class="main-container"></div>
    <div class="w-2/3 mx-auto mb-64">
        <div class="flex flex-col gap-y-4">
            <h1 class="uppercase font-bold text-5xl text-center">Frequently Asked Questions</h1>

            @component('components.faq-banner', [
                'question' => 'Question goes here',
            ])
            @endcomponent
            @component('components.faq-banner', [
                'question' => 'Question goes here',
            ])
            @endcomponent
            @component('components.faq-banner', [
                'question' => 'Question goes here',
            ])
            @endcomponent
            @component('components.faq-banner', [
                'question' => 'Question goes here',
            ])
            @endcomponent


        </div>
    </div>
@endsection
