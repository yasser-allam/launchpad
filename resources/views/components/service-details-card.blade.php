<div class="w-full h-full relative bg-[rgba(233,235,238,0.7)] rounded-xl" data-aos="fade-up">
    <div class="flex gap-4 overflow-hidden">
        <div class="w-full h-full">
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
            <span class="text-lg font-extrabold uppercase">{{ $title }}</span>
            <p class="text-base text-black/60 leading-relaxed font-thin">{{ $description }}</p>
        </div>
    </div>
</div>
