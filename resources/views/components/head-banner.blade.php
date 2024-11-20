<div id="cover"
    class="overflow-hidden h-[45vw] relative mb-20">
    @component('components.image_asp.image', [
        'url' => $img,
        'alt' => 'img',
        'ratio' => '2-1',
        'classes' => 'mix-blend-luminosity',
        'fit' => 'cover',
    ])
    @endcomponent
    <div class="overlay"></div>
</div>

<div class="flex flex-col absolute top-1/3 left-24 w-[39%] gap-y-14">
    <h1 class="uppercase text-white text-7xl font-black">{{ $text }}</h1>
    @component('components.button', [
        'name' => 'Work with us',
        'theme' => 'light',
    ])
    @endcomponent
    <a href="#next">
        <img src="/assets/icons/products/mouse.gif" alt="Loading animation" class="w-[4%] mt-8">
        {{-- <img src="{{ asset('assets/icons/products/oval.svg') }}" alt="icon"> --}}
    </a>
</div>
