<div class="bg-[#FFFFFF]/10 flex items-center px-12 py-5 rounded-xl">
    {{-- <img src="{{ asset($icon) }}" alt=""> --}}
    <div class="w-full h-full">
        @component('components.image_asp.image', [
            'url' => $icon,
            'alt' => 'img',
            'ratio' => '2-1',
            'classes' => '',
            'fit' => 'cover',
        ])
        @endcomponent
    </div>
</div>