<div class="w-full h-full relative bg-[rgba(233,235,238,0.7)] rounded-xl">
    <div class="flex gap-4 overflow-hidden">
        <div class="w-full h-full transform -translate-x-[25%] -translate-y-[15%]">
            @component('components.image_asp.image', [
                'url' => $svg,
                'alt' => 'img',
                'ratio' => '2-3',
                'classes' => '',
                'fit' => 'contain',
            ])
            @endcomponent
        </div>
        <div class="flex flex-col pt-8 pr-8 gap-y-4">
            <span class="text-xl font-extrabold uppercase">{{ $title }}</span>
            <p class="text-base font-thin">{{ $description }}</p>
        </div>
    </div>
</div>
