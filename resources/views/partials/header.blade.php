{{-- <div class="flex justify-center">
    <nav id="navbar"
        x-data="{
            isTransparent: {{ Request::is('test') ? 'true' : 'false' }},
            scrolledPast: false
        }"
        x-init="window.addEventListener('scroll', () => {
            scrolledPast = window.scrollY > 200;
        })"
        :class="{
            'bg-transparent !text-white': isTransparent && !scrolledPast,
            'bg-white text-black': !isTransparent || scrolledPast,
        }"
        class="fixed top-8 w-11/12 mx-auto pl-[2vw] h-[70px] flex flex-wrap justify-between items-center z-20 shadow-2xl rounded-lg md:flex-nowrap">

        <!-- Logo -->
        <div class="flex justify-center">
            <a wire:navigate href="/">
                <img id="navImage" class="w-full h-auto object-contain"
                    :src="scrolledPast ? '{{ asset('assets/icons/header/white-logo.svg') }}' :
                        '{{ asset('assets/icons/header/black-logo.svg') }}'"
                    alt="Launchpad Logo">
            </a>
        </div>

        <!-- Navbar Links -->
        <div class="space-x-8 font-bold uppercase">
            <a wire:navigate href="/about-us">About Us</a>
            <a wire:navigate href="/products">Products</a>
            <a wire:navigate href="/services">Services</a>
            <a wire:navigate href="/our-work">Our Work</a>
            <a wire:navigate href="/contact-us">Contact Us</a>
        </div>

        <!-- Start Your Project Button -->
        <div class="flex items-center w-1/6 relative order-2 lg:order-3">
            <button class="btn font-lg absolute">Start Your Project</button>
        </div>
    </nav>
</div> --}}







































{{-- NAV BAR WHITE --}}

<div class="flex justify-center">
    <nav id="navbar"
        class="fixed top-6 w-11/12 mx-auto pl-[2vw] h-[70px] flex flex-wrap justify-between items-center z-20 shadow-2xl rounded-lg md:flex-nowrap bg-white">

        <div class="flex justify-center">
            <a wire:navigate href="/">
                <img id="navImage" class="w-full h-auto object-contain"
                    src="{{ asset('assets/icons/header/black-logo.svg') }}"
                    alt="Launchpad Logo">
            </a>
        </div>
        <div class="space-x-8 font-bold uppercase ">
            <a wire:navigate class="" href="/about-us">About Us</a>
            <a wire:navigate class="" href="/products">Products</a>
            <a wire:navigate class="" href="/services">Services</a>
            <a wire:navigate class="" href="/our-work">Our Work</a>
            <a wire:navigate class="" href="/contact-us">Contact Us</a>
        </div>
        <div class="flex items-center w-1/6 relative order-2 lg:order-3">
            <button class="btn font-lg absolute">Start Your Project</button>
        </div>
    </nav>
</div>
