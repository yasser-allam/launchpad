@extends('layouts.main')
@section('main-content')
    <div class="w-11/12 mx-auto mt-40">
        <h1 class="uppercase text-7xl mb-16">Welcome To <strong class="blue">Launchpad</strong></h1>

        <div class="flex justify-between w-full mb-20">
            <div class="relative flex flex-col" id="divi">
                {{-- @component('components.image_asp.image', [
    'url' => 'assets/about-us/welcome.png',
    'alt' => 'img',
    'ratio' => '1-1',
    'classes' => '',
    'fit' => 'cover',
])
                @endcomponent --}}
                <img class="abolute object-cover h-full w-full rounded-xl" src="{{ asset('assets/about-us/welcome.png') }}"
                    alt="about us img">
                <div class="flex items-center p-4 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('assets/icons/about-us/industry.svg') }}" alt="how we do it img">
                    <h2 class="uppercase font-bold">Industry Experts</h2>
                </div>
                <div class="flex items-center p-4 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('assets/icons/about-us/industry.svg') }}" alt="how we do it img">
                    <p class="uppercase font-bold">Industry Experts</p>
                </div>
                <div class="flex items-center p-4 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('assets/icons/about-us/industry.svg') }}" alt="how we do it img">
                    <p class="uppercase font-bold">Industry Experts</p>
                </div>
                <div class="flex items-center p-4 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('assets/icons/about-us/industry.svg') }}" alt="how we do it img">
                    <p class="uppercase font-bold">Industry Experts</p>
                </div>
                <div class="flex items-center p-4 bg-white rounded-xl shadow-xl">
                    <img src="{{ asset('assets/icons/about-us/industry.svg') }}" alt="how we do it img">
                    <p class="uppercase font-bold">Industry Experts</p>
                </div>
            </div>
            <div class="flex flex-col w-1/2">
                <h2 class="uppercase text-bold">Our Story</h2>
                <p class="font-thin w-2/3">
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

    <div class="w-full h-[810px] flex mb-20 text-white">
        <div class="bg-black w-1/2">
            <div class="flex flex-col p-20 space-y-6">
                @component('components.image_asp.image', [
                    'url' => 'assets/about-us/how-we-do-it.png',
                    'alt' => 'how we do it img',
                    'ratio' => '2-1',
                    'classes' => '',
                    'fit' => 'cover',
                ])
                @endcomponent
                <h2 class="text-4xl font-extrabold">How We Do It</h2>
                <p class="font-thin ">We specialize in providing comprehensive e-commerce consultancy by fully understanding
                    your operations
                    and business goals. We assess your online presence and check the foundations for a successful launch. By
                    addressing gaps and suggesting efficient solutions, we work collaboratively with your team to ensure
                    revenue generation to your business through our services. To be able to maintain the stability of the
                    revenue generated, we focus on providing a premium after-sale service to ensure growth stability.</p>
            </div>
        </div>
        <div class="bg-black/50 w-1/2">
            <div class="flex flex-col p-20 space-y-6">
                @component('components.image_asp.image', [
                    'url' => 'assets/about-us/why-we-do-it.png',
                    'alt' => 'why we do it img',
                    'ratio' => '2-1',
                    'classes' => '',
                    'fit' => 'cover',
                ])
                @endcomponent
                <h2 class="text-4xl font-extrabold">Why We Do It</h2>
                <p class="font-thin ">As a team of passionate experts in technology and operations, we’re excited to apply
                    our in-depth
                    knowledge to enhance your business at its core.</p>
            </div>
        </div>
    </div>
@endsection
