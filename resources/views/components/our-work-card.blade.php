<div class="flex flex-col items-start rounded-xl shadow-2xl relative overflow-hidden group ">
    <div class="h-full w-full px-4 pt-4">
        @component('components.image_asp.image', [
            'url' => $bg,
            'alt' => 'img',
            'ratio' => '5-3',
            'classes' => 'transition-transform duration-700 transform group-hover:scale-[1.15]',
            'fit' => 'cover',
        ])
        @endcomponent
    </div>
    <div class="font-semibold mt-6 mb-8 ml-4">{{ $title }}</div>
</div>
