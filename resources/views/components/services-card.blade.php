<a wire:navigate href="/service-details" class="flex flex-col px-8 pt-8 pb-12 rounded-xl shadow-xl gap-y-4 group"
    data-aos="fade-up">
    @php
        $leading = '';
        if ($direction == 'vertical') {
            $direction = 'w-[23%]';
            $leading = 'relaxed';
        } else {
            $direction = 'w-[15%]';
        }
    @endphp
    <div class="flex justify-between">
        <div class="{{ $direction }} mb-2">
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
    <p class="text-base font-thin {{ $leading }} text-black/60">{{ $description }}</p>
</a>
