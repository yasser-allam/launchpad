<div class="flex justify-center">
    <nav id="navbar"
        class=" fixed mx-auto top-8 w-11/12 h-[70px] flex justify-between items-center z-20 shadow-2xl rounded-lg px-10
        bg-red-800">
        <div class="flex justify-center">
            <a href="/">
                <img id="navImage" class="w-full h-auto object-contain" src="{{ asset('assets/header/black-logo.svg') }}"
                    alt="Launchpad Logo">
            </a>
        </div>
        <div class="space-x-8 font-bold uppercase ">
            <a class="" href="/about-us">About Us</a>
            <a class="" href="/">Products</a>
            <a class="" href="/">Services</a>
            <a class="" href="/">Our Work</a>
            <a class="" href="/">Contact Us</a>
        </div>
        {{-- transform -translate-x-[30px] -translate-y-[30px] --}}
        <div class="flex items-center p-10">
            <button class="btn font-lg transform -translate-x-[210px]">Start Your Project</button>
        </div>
    </nav>
</div>
