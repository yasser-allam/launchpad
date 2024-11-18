<a wire:navigate href="/service-details" class="flex flex-col px-8 pt-8 pb-12 rounded-xl shadow-xl gap-y-4 group"
    data-aos="fade-up">
    <div class="flex justify-between">
        <div class="w-[15%] mb-2">
            @component('components.image_asp.image', [
                'url' => $img,
                'alt' => 'icon svg',
                'ratio' => '1-1',
                'classes' => '',
                'fit' => 'fit',
            ])
            @endcomponent
        </div>
        <div id="special"
            class="w-[15%] relative opacity-0 
            transform -translate-x-2 transition-all duration-500
            group-hover:translate-x-2 group-hover:opacity-100">
            <div class="absolute w-[50%] top-0 right-0">
                @include('includes.blue-arrow-right')

            </div>
        </div>
    </div>
    <span class="text-lg font-extrabold uppercase">{{ $title }}</span>
    <p class="text-md font-thin text-black/50">{{ $description }}</p>
</a>
