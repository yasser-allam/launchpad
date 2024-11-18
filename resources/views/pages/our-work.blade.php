@extends('layouts.main')
@section('main-content')
    <div class="w-11/12 mx-auto">
        <div class="h-[18vh] w-full"></div>
        <span class="uppercase text-7xl font-black">Our Work</span>
        <div class="flex items-start font-semibold gap-x-8 uppercase my-14">
            <span>All Items</span>
            <span>IT & Technology</span>
            <span>Service Providers</span>
            <span>Fashion</span>
            <span>Food & Beverages</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-32">


            {{-- <div class="flex flex-col items-start rounded-xl shadow-2xl relative overflow-hidden group ">
                <div class="h-full w-full px-4 pt-4">
                    @component('components.image_asp.image', [
    'url' => 'assets/our-work/bg1.png',
    'alt' => 'img',
    'ratio' => '5-3',
    'classes' => 'transition-transform duration-700 transform group-hover:scale-[1.15]',
    'fit' => 'cover',
])
                    @endcomponent
                </div>
                <div
                    class="absolute top-[35%] left-[41%] transition-transform duration-700 transform group-hover:scale-[1.15]">
                    <img class="" src="{{ asset('assets/icons/our-work/icon1.svg') }}" alt="icon 1">
                </div>
                <div class="font-semibold mt-6 mb-8 ml-4">ABC Group</div>
            </div> --}}

            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg1.png',
                'title' => 'ABC Group',
                'icon' => 'assets/icons/our-work/icon1.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg2.png',
                'title' => 'IQOS by PHILIP MORRIS',
                'icon' => 'assets/icons/our-work/icon2.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg3.png',
                'title' => 'Najjar Professional Solutions',
                'icon' => 'assets/icons/our-work/icon3.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg4.png',
                'title' => 'Brasserie Almaza',
                'icon' => 'assets/icons/our-work/icon4.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg1.png',
                'title' => 'ABC Group',
                'icon' => 'assets/icons/our-work/icon1.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg2.png',
                'title' => 'IQOS by PHILIP MORRIS',
                'icon' => 'assets/icons/our-work/icon2.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg3.png',
                'title' => 'Najjar Professional Solutions',
                'icon' => 'assets/icons/our-work/icon3.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg4.png',
                'title' => 'Brasserie Almaza',
                'icon' => 'assets/icons/our-work/icon4.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg1.png',
                'title' => 'ABC Group',
                'icon' => 'assets/icons/our-work/icon1.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg2.png',
                'title' => 'IQOS by PHILIP MORRIS',
                'icon' => 'assets/icons/our-work/icon2.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg3.png',
                'title' => 'Najjar Professional Solutions',
                'icon' => 'assets/icons/our-work/icon3.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg4.png',
                'title' => 'Brasserie Almaza',
                'icon' => 'assets/icons/our-work/icon4.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg1.png',
                'title' => 'ABC Group',
                'icon' => 'assets/icons/our-work/icon1.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg2.png',
                'title' => 'IQOS by PHILIP MORRIS',
                'icon' => 'assets/icons/our-work/icon2.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg3.png',
                'title' => 'Najjar Professional Solutions',
                'icon' => 'assets/icons/our-work/icon3.svg',
            ])
            @endcomponent
            @component('components.our-work-card', [
                'bg' => 'assets/our-work/bg4.png',
                'title' => 'Brasserie Almaza',
                'icon' => 'assets/icons/our-work/icon4.svg',
            ])
            @endcomponent



        </div>
    </div>
@endsection
