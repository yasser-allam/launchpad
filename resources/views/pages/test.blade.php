<div class="py flex flex-col gap-y-4 mt-16 main-container ">

    <div id="maindiv" class="my-8">
        <div id="div1">
            @foreach (range(1, 16) as $index)
                <div class="partner-item">
                    <a target="_blank"
                        class="block bg-transparent asp asp-3-1">
                        <img class="mx-auto my-auto !object-contain !w-[60%]"
                            src="{{ asset('assets/icons/home/icon1.svg') }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div id="div2">
            @foreach (range(1, 16) as $index)
                <div class="partner-item">

                    <a target="_blank"
                        class="block bg-transparent asp asp-3-1">
                        <img class="mx-auto my-auto !object-contain !w-[60%] "
                            src="{{ asset('assets/icons/home/icon2.svg') }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .partner-item {
        flex: 0 0 auto;
        /* Prevent shrinking */
        width: 200px;
    }

    #maindiv {
        background-color: black;
        display: flex !important;
        align-items: center;
        overflow: hidden;
        white-space: nowrap;
    }

    #div1,
    #div2 {
        display: flex !important;
        align-items: center;
        display: inline-block;
        animation: marquee 24s linear infinite;
    }

    #div2 {
        animation: marquee 24s linear infinite;
    }

    /* Smooth transition for color change */
    /* .partner-item img {
        transition: filter 0.3s ease, opacity 0.3s ease;
    } */

    /* .partner-item img.grayscale {
        filter: grayscale(100%);
        opacity: 0.5;
    } */

    /* Hover or focus to show original color */
    /* .partner-item:hover img,
    .partner-item:focus img {
        filter: grayscale(0%);
        opacity: 1;
    } */

    /* Pause the animation on hover */
    /* #maindiv:hover #div1,
    #maindiv:hover #div2 {
        animation-play-state: paused;
    } */

    @keyframes marquee {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>
