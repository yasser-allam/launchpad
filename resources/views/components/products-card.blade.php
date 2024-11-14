<div class="flex flex-col ">
    <div class="w-full h-full relative ">
        @component('components.image_asp.image', [
            'url' => $bgImg,
            'alt' => 'card img',
            'ratio' => '5-6',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
        <div class="absolute w-[55%] top-0 left-0">
            @component('components.image_asp.image', [
                'url' => $bgIcon,
                'alt' => 'card-icon img',
                'ratio' => '1-1',
                'classes' => '',
                'fit' => 'cover',
            ])
            @endcomponent
        </div>
        <div class="absolute top-[55%] left-[14%] w-[80%]">
            <span class="uppercase text-xl text-white font-bold">{{ $title }}</span>
            <p class="font-thin text-white text-md mt-10">{{ $description }}</p>
        </div>
    </div>



</div>






{{-- 
<div class="flex flex-col ">
    <div class="w-full h-full relative ">
        @component('components.image_asp.image', [
    'url' => $bgImg,
    'alt' => 'card img',
    'ratio' => '5-6',
    'classes' => '',
    'fit' => 'cover',
])
        @endcomponent
    </div>
{{-- overflow-hidden -top-12 -left-8 
    <div class="absolute w-[13%]">
        @component('components.image_asp.image', [
    'url' => $bgIcon,
    'alt' => 'card-icon img',
    'ratio' => '1-1',
    'classes' => '',
    'fit' => 'cover',
])
        @endcomponent
    </div>
    <div class="absolute ">
        <span class="uppercase text-2xl text-white font-bold">{{ $title }}</span>
        <p class="font-thin text-white text-md mt-10">{{ $description }}</p>
    </div>

</div> --}}
