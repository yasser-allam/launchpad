<div class="col-span-1 flex h-full">
    <div class="flex flex-col gap-y-10 py-12 px-8 bg-white items-center shadow-2xl rounded-xl flex-grow">
        <div class="w-[35%] h-[35%]">
            @component('components.image_asp.image', [
                'url' => $url,
                'alt' => 'how we do it img',
                'ratio' => '1-1',
                'classes' => '',
                'fit' => 'cover',
            ])
            @endcomponent
        </div>
        <h3 class="uppercase text-xl font-bold text-center">{{ $title ?? '' }}</h3>
        <p class="text-base font-thin text-center">{{ $description ?? '' }}</p>
    </div>
</div>
