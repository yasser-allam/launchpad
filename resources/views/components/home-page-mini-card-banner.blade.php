<div class="bg-[#FFFFFF]/10 flex items-center px-12 py-5 rounded-xl">
    {{-- <img src="{{ asset($icon) }}" alt=""> --}}
    <div class="w-full h-full">
        @component('components.image_asp.image', [
            'url' => $icon,
            'alt' => 'img',
            'ratio' => '5-2',
            'classes' => '',
            'fit' => 'contain',
        ])
        @endcomponent
    </div>
</div>
