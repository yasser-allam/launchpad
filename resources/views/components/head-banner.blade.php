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
{{-- max-[1650px]:top-[18%] --}}
<div
    class="flex flex-col flex-wrap absolute top-[20px] sm:top-[10%] lg:top-[15%] min-[1650px]:top-1/3 left-8 md:left-16 lg:left-24 w-[40%] lg:w-[50%] 2xl:w-[39%] gap-y-2 sm:gap-y-8 xl:gap-y-14 rtl-effect">
    <h1
        class="uppercase text-white text-sm sm:text-2xl lg:text-4xl min-[1340px]:text-6xl min-[1850px]:text-7xl font-black">
        {{ $text }}</h1>
    <div class="w-full">

        @component('components.button', [
            'name' => 'Work with us',
            'theme' => 'light',
        ])
        @endcomponent
    </div>
    <a href="#next">
        <img src="/assets/icons/products/mouse.gif" alt="Loading animation" class="w-[5%] lg:w-[4%] lg:mt-8">
    </a>
</div>
