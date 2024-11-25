<div class="rounded-xl shadow-xl p-8 bg-white group">
    <span class="text-2xl font-black">{{ $title }}</span>
    <p class="font-thin text-lg text-black/60 my-10">{{ $description }}</p>
    <span class="uppercase text-base font-bold">Services</span>
    <div class="grid grid-cols-3 gap-4 mt-6 mb-20">
        <div class="rounded-full bg-[#1578FF]/20 py-2 px-3">Service Name 1</div>
        <div class="rounded-full bg-[#1578FF]/20 py-2 px-3">Service Name 2</div>
        <div class="rounded-full bg-[#1578FF]/20 py-2 px-3">Service Name 3</div>
        <div class="rounded-full bg-[#1578FF]/20 py-2 px-3">Service Name 4</div>
    </div>
    <hr class="mt-10">
    <div class="flex justify-between mt-4">
        <div class="w-[13%]">
            @component('components.image_asp.image', [
                'url' => $icon,
                'alt' => 'icon',
                'ratio' => '1-1',
                'classes' => '',
                'fit' => 'cover',
            ])
            @endcomponent
        </div>
        <div>
            @include('includes.success-arrow-right')
        </div>

    </div>
</div>
