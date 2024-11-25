@extends('layouts.main')
@section('main-content')
    {{-- <div id="cover"
        class="overflow-hidden h-[70vh] relative ">
        @component('components.image_asp.image', [
    'url' => 'assets/service-details/bg-image.png',
    'alt' => 'img',
    'ratio' => '5-2',
    'classes' => '',
    'fit' => 'cover',
])
        @endcomponent
        <div class="absolute left-24 top-[25%] w-full">
            <div class="flex flex-col w-[40%] gap-y-14 rtl-effect">
                <h1 class="uppercase text-white text-7xl font-black">Tech & Integrations</h1>
                <p class="text-white text-xl ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id
                    volutpat lacus laoreet.</p>
                @component('components.button', [
    'name' => 'Start Your Project',
    'theme' => 'light',
])
                @endcomponent

            </div>
        </div>
        <div class="absolute right-24 w-[35%] top-[25%] mix-blend-luminosity  ltr-effect">
            @component('components.image_asp.image', [
    'url' => 'assets/service-details/main.png',
    'alt' => 'img',
    'ratio' => '5-3',
    'classes' => 'rounded-xl',
    'fit' => 'cover',
])
            @endcomponent
        </div>
    </div> --}}

    <div
        class="relative w-11/12 mx-auto grid max-[500px]:grid-cols-[40%,0%,auto] grid-cols-[45%,5%,auto] gap-4 xl:gap-8 mt-10 md:mt-20 2xl:mt-44">
        <div class="w-full">
            <div class="flex flex-col w-full gap-y-4 xl:gap-y-14 rtl-effect">
                <h1
                    class="uppercase text-white text-xs sm:text-3xl md:text-4xl 2xl:text-7xl font-black leading-tight">
                    Tech & Integrations</h1>
                <p class="text-white/80 font-thin text-[8px] max-[900px]:text-[10px] xl:text-xl ">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum
                    est ultricies integer quis. Iaculis urna id
                    volutpat lacus laoreet.</p>
                @component('components.button', [
                    'name' => 'Start Your Project',
                    'theme' => 'light',
                ])
                @endcomponent

            </div>
        </div>
        <div></div>
        <div class="w-[70%] justify-self-end mix-blend-luminosity  ltr-effect">
            @component('components.image_asp.image', [
                'url' => 'assets/service-details/main.png',
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'rounded-xl max-[500px]:h-[200px]',
                'fit' => 'cover',
            ])
            @endcomponent
        </div>
    </div>
    <div id="background"
        class="overflow-hidden w-full absolute -z-50">
        @component('components.image_asp.image', [
            'url' => 'assets/service-details/bg-image.png',
            'alt' => 'img',
            'ratio' => '5-2',
            'classes' => 'max-[500px]:h-[350px]',
            'fit' => 'cover',
        ])
        @endcomponent
    </div>



    <div class="w-11/12 mx-auto flex flex-col gap-y-10 mt-72 rtl-effect">
        <span class="text-5xl font-black uppercase leading-relaxed w-1/2">Offering multiple services from our talented
            team</span>
        <p class="text-lg w-1/2 font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.</p>

        <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-32 gap-10">
            <div class="dtu-effect">

                @component('components.service-details-card', [
                    'svg' => 'assets/icons/service-details/card-icon1.svg',
                    'title' => 'UI/UX Design',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">

                @component('components.service-details-card', [
                    'svg' => 'assets/icons/service-details/card-icon2.svg',
                    'title' => 'Web Development',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">

                @component('components.service-details-card', [
                    'svg' => 'assets/icons/service-details/card-icon3.svg',
                    'title' => 'API Integrations',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">

                @component('components.service-details-card', [
                    'svg' => 'assets/icons/service-details/card-icon4.svg',
                    'title' => 'Hosting',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>
            <div class="dtu-effect">

                @component('components.service-details-card', [
                    'svg' => 'assets/icons/service-details/card-icon5.svg',
                    'title' => 'SEO',
                    'description' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.',
                ])
                @endcomponent
            </div>

        </div>
    </div>

    <div class="w-full bg-black ">
        <div class="w-11/12 mx-auto text-white mt-20">
            <div class="flex flex-col gap-y-10 ">
                <div class="w-[55%]  dtu-effect">
                    <span class="text-5xl font-extrabold uppercase">How It Works</span>
                    <p class="font-thin text-lg my-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.</p>
                </div>

                <div class="flex items-center w-full  h-[98vh] gap-x-20 ml-10 mb-32 ">
                    <div class="overflow-hidden  w-[40%] rounded-xl relative ">
                        @component('components.image_asp.image', [
                            'url' => 'assets/service-details/how-it-works-img-1.png',
                            'alt' => 'img',
                            'ratio' => '1-1',
                            'classes' => 'mix-blend-luminosity',
                            'fit' => 'cover',
                        ])
                        @endcomponent
                        <div class="overlay"></div>
                    </div>
                    <div class="w-[5%]"></div>

                    <div class="w-[40%] h-[760px] overflow-y-scroll snap-y ">

                        @foreach (range(1, 7) as $index)
                            <div class="flex flex-col justify-center h-[98vh]">
                                <span class="uppercase font-black text-5xl leading-relaxed mb-10">Title of the step goes
                                    here</span>
                                <p class="font-thin text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing
                                    elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id
                                    volutpat
                                    lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus
                                    ultrices in.
                                </p>
                                <br>
                                <p class="font-thin text-base leading-relaxed">
                                    Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt
                                    ornare
                                    massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum
                                    faucibus.
                                    Fusce id velit ut tortor
                                </p>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="h-32"></div>
@endsection
