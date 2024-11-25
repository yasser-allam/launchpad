<a wire:navigate href="/service-details"
    class="flex border border-gray-200 rounded-xl hover:shadow-xl gap-x-4 group p-8 ">
    <div class="flex justify-between">
        <div class="w-[10%] mr-10">
            @component('components.image_asp.image', [
                'url' => $img,
                'alt' => 'icon svg',
                'ratio' => '1-1',
                'classes' => '',
                'fit' => 'fit',
            ])
            @endcomponent
        </div>

        <div>
            <span class="text-lg font-extrabold uppercase">{{ $title }}</span>
            <p class="text-base font-thin text-black/60 mt-6">{{ $description }}</p>
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
</a>
