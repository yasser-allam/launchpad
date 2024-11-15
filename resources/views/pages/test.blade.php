@extends('layouts.main')
@section('main-content')
    <!-- Cover Section -->
    <div id="cover" class="h-screen w-full bg-red-800 ">
        <div class="h-full w-full flex items-center justify-around">
            @component('components.image_asp.image', [
                'url' => 'assets/products/main.png',
                'alt' => 'card img',
                'ratio' => '5-6',
                'classes' => '',
                'fit' => 'cover',
            ])
            @endcomponent

        </div>
    </div>


    <div class="bg-green-700 h-screen w-full"></div>
@endsection



{{-- 
<div class="w-full h-full relative ">
    @component('components.image_asp.image', [
    'url' => $bgImg,
    'alt' => 'card img',
    'ratio' => '5-6',
    'classes' => '',
    'fit' => 'cover',
])
    @endcomponent
    <div class="absolute top-10 left-16 w-[70%] bg-gray-400">
        <div class="absolute w-[70%] -top-12 -left-12">
            @component('components.image_asp.image', [
    'url' => $bgIcon,
    'alt' => 'card-icon img',
    'ratio' => '1-1',
    'classes' => '',
    'fit' => 'cover',
])
            @endcomponent
        </div>
        <div class="mt-64">
            <span class="uppercase text-xl text-white font-bold">{{ $title }}</span>
            <p class="font-thin text-white text-sm/[24px] mt-10">{{ $description }}</p>
        </div>
    </div>
</div> --}}
