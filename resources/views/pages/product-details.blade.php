@extends('layouts.main')
@section('main-content')
    <div class="w-full">
        @component('components.image_asp.image', [
            'url' => 'assets/product-details/main.png',
            'alt' => 'how we do it img',
            'ratio' => '5-2',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
    </div>


    <div
        class="w-11/12 mx-auto grid grid-cols-1 gap-4 min-[1650px]:grid-cols-[800px_auto_600px] p-12 shadow-xl bg-white rounded-xl mt-14 dtu-effect">

        <div class="flex flex-wrap flex-col w-full gap-y-5 ">
            <h1 class="font-black text-3xl md:text-5xl 2xl:text-7xl leading-relaxed">‘HEYA’ ECOMMERCE SOLUTION</h1>
            <div class="my-14">
                <button
                    class="uppercase text-white bg-black rounded-full flex items-center justify-center px-4 sm:px-8 py-4 hover:text-black hover:bg-white transition duration-300 border border-transparent hover:border-black">Start
                    Your Project</button>
            </div>
        </div>
        <div></div>
        <div class="flex flex-col w-full gap-y-5">
            <p class="text-xl font-light">A plug-and-play eCommerce solution , designed to provide a fully customizable
                online store
                experience.</p>
            <p class="uppercase font-extrabold text-lg">Themes and Theme Builder</p>
            <p class="text-xl font-light">Includes pre-built themes and a robust theme builder for businesses to create
                unique, branded
                stores
                effortlessly.</p>
            <p class="uppercase font-extrabold text-lg">Ideal For</p>
            <p class="text-xl font-light">Retailers, fashion brands, beauty shops, electronics, and more.</p>
        </div>
    </div>

    <div class="flex flex-col items-center gap-y-16 py-20 w-11/12 mx-auto flex-wrap mt-20">
        <h2 class="uppercase font-black text-xl sm:text-5xl dtu-effect">Key Features</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="dtu-effect">
                @component('components.key-features-banner', [
                    'url' => 'assets/icons/product-details/customize.svg',
                    'title' => 'Customizable Storefront',
                    'description' => 'Easily design and personalize the layout based on your business objective and store style.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">
                @component('components.key-features-banner', [
                    'url' => 'assets/icons/product-details/gateways.svg',
                    'title' => 'Integrated Payment Gateways',
                    'description' => 'Supports multiple payment gateways, ensuring a seamless checkout process.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">
                @component('components.key-features-banner', [
                    'url' => 'assets/icons/product-details/mobile.svg',
                    'title' => 'Mobile Optimization',
                    'description' => 'Fully responsive design for a superior shopping experience on mobile devices.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">
                @component('components.key-features-banner', [
                    'url' => 'assets/icons/product-details/scalability.svg',
                    'title' => 'Scalability',
                    'description' => 'Suitable for businesses of all sizes, with the ability to grow as your business expands.',
                ])
                @endcomponent
            </div>

        </div>




    </div>







    {{-- <div class="w-11/12 mx-auto relative text-white mt-20 mb-64">
        <div class="relative rounded-xl">
            @component('components.image_asp.image', [
    'url' => 'assets/product-details/advantages.png',
    'alt' => 'advantages img',
    'ratio' => '3-1',
    'classes' => '',
    'fit' => 'cover',
])
            @endcomponent
        </div>
        <div class="flex flex-col gap-y-10 absolute top-32 right-64">
            <h1 class="text-5xl font-extrabold utd-effect">Advantages</h1>
            <div class="flex gap-x-4 items-center rtl-effect">
                <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                <p class="text-lg uppercase font-extrabold">Quick deployment with minimal setup time.
                </p>
            </div>
            <div class="flex gap-x-4 items-center rtl-effect">
                <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                <p class="text-lg uppercase font-extrabold">Fully customizable themes for branding
                    flexibility.</p>
            </div>
            <div class="flex gap-x-4 items-center rtl-effect">
                <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                <p class="text-lg uppercase font-extrabold">Robust eCommerce features.</p>
            </div>
        </div>
    </div> --}}




    <div id="special" class="w-11/12 mx-auto relative text-white mt-20 mb-96">
        <div id="wrapper" class="absolute h-full w-full">
            @component('components.image_asp.image', [
                'url' => 'assets/product-details/advantages.png',
                'alt' => 'advantages img',
                'ratio' => '3-1',
                'classes' => 'rounded-xl',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="grid grid-cols-2 place-content-center">
            <div></div>
            <div class="grid grid-col-1 gap-10">
                <span class="text-5xl font-extrabold utd-effect">Advantages</span>
                <div class="flex gap-x-4 items-center rtl-effect">
                    <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                    <p class="text-lg uppercase font-extrabold">Quick deployment with minimal setup time.
                    </p>
                </div>
                <div class="flex gap-x-4 items-center rtl-effect">
                    <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                    <p class="text-lg uppercase font-extrabold">Fully customizable themes for branding
                        flexibility.</p>
                </div>
                <div class="flex gap-x-4 items-center rtl-effect">
                    <img src="{{ asset('assets/icons/product-details/tick.svg') }}" alt="">
                    <p class="text-lg uppercase font-extrabold">Robust eCommerce features.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
