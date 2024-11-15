<div class="product-card  {{ $gradient }}">
    <div class="absolute w-[70%] -top-12 -left-8 ">
        @component('components.image_asp.image', [
            'url' => $bgIcon,
            'alt' => 'card-icon img',
            'ratio' => '1-1',
            'classes' => '',
            'fit' => 'contain',
        ])
        @endcomponent
    </div>
    {{-- top-[57%] --}}
    <div class="absolute top-[63%] left-[5%] w-[80%]">
        <span class="uppercase text-xl text-white font-bold">{{ $title }}</span>
    </div>
    <div class="absolute bottom-[10%] left-[5%] w-[80%]">
        <p class="font-thin text-white text-[15px] mt-10">{{ $description }}</p>
    </div>
</div>
