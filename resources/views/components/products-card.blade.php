<a wire:wirenavigate href="/product-details" class="product-card group {{ $gradient }}" data-aos="fade-up">
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
    <div class="flex justify-between flex-row-reverse h-full -translate-x-6 translate-y-6">
        <div id="special"
            class="w-[15%] h-full opacity-0 
            transform -translate-x-1 transition-all duration-500
            group-hover:translate-x-1 group-hover:opacity-100">
            <div class="absolute w-[50%] top-0 right-0">
                @include('includes.white-arrow-right')
            </div>
        </div>
    </div>

    <div class="absolute top-[63%] left-[5%] w-[80%]">
        <span class="uppercase text-xl text-white font-bold">{{ $title }}</span>
    </div>
    <div class="absolute bottom-[10%] left-[5%] w-[80%]">
        <p class="font-thin text-white/70 text-[15px] mt-10">{{ $description }}</p>
    </div>
</a>
