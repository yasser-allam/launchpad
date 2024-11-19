<div class="px-4 pt-4 pb-8 shadow-xl rounded-xl">
    <div class="flex flex-col gap-y-2">
        <div class="relative">
            @component('components.image_asp.image', [
                'url' => $img,
                'alt' => 'img',
                'ratio' => '5-3',
                'classes' => 'rounded-xl',
                'fit' => 'cover',
            ])
            @endcomponent
            <div class="overlay3 rounded-xl"></div>
        </div>
        <span class="text-xl font-bold uppercase mt-8">{{ $country ?? '' }}</span>
        <p class="font-thin">{{ $location ?? '' }}</p>
        <div class="flex space-x-4 my-4">
            @include('includes.phone')
            <span class="text-sm font-thin"> {{ $phone ?? '' }}</span>
        </div>
        <a wire:navigate href="{{ $location_link ?? '' }}">
            <u class="uppercase font-bold blue ">
                Get Directions
            </u>
        </a>
    </div>
</div>
