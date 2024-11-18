<div class="flex flex-col items-center justify-center  w-full">
    <footer id="footer" class="bg-black w-full">
        {{-- transform translate-x-1/12 --}}
        <div class="w-11/12 mx-auto mt-28">
            <div class="flex flex-wrap justify-between">
                <div class="flex flex-col items-start text-white">
                    <span class="text-5xl uppercase "><strong>Let's Talk About</strong></span>
                    <span class="text-5xl uppercase mt-6 mb-12"><strong>Your Project</strong></span>
                    <span class="mb-10">
                        <button class="btn">Start Your Project</button>
                    </span>
                </div>
                <img class="transform lg:-translate-x-6 " src="{{ asset('assets/icons/footer/icon.svg') }}"
                    alt="Logo">
            </div>
        </div>
        <div class="flex flex-wrap max-content justify-between w-11/12 mx-auto mt-16 mb-16 gap-y-4 gap-x-3">
            @component('components.footer-card', [
                'location' => 'Lebanon',
                'description' => 'Aramex Building, 1st Floor, Mirna Chalouhi Highway – Lebanon',
                'phone' => '+961 1 485 075',
            ])
            @endcomponent
            @component('components.footer-card', [
                'location' => 'UAE',
                'description' => 'Location goes here',
                'phone' => '+961 1 485 075',
            ])
            @endcomponent
            @component('components.footer-card', [
                'location' => 'Kuwait',
                'description' => 'Location goes here',
                'phone' => '+961 1 485 075',
            ])
            @endcomponent

        </div>

        <hr class="border-white/20 mt-28" />

        <div class="w-11/12 mb-6 mt-3 mx-auto">
            <div class="flex justify-between flex-wrap">
                <div class="flex items-center max-content justify-between">
                    <span class="text-xs text-white/50 sm:text-center font-thin">© 2024. All Rights Reserved. Copyrights
                        <strong class="text-white"><u> <a wire:navigate href="/">Launchpad</a></u></strong>
                    </span>
                    <span class="text-xs text-white/50 sm:text-center font-thin">. Web Design & Development By
                        <strong class="text-white"><u> <a wire:navigate href="https://thewebaddicts.com/">The Web
                                    Addicts</a></u></strong>.
                    </span>
                </div>
                <div class="flex items-center justify-around text-white/80 font-thin space-x-5">
                    <a wire:navigate href="/">Terms & Conditions</a>
                    <a wire:navigate href="/">Privacy Policy</a>
                    <a wire:navigate href="/">Cookies Policy</a>
                </div>
            </div>
        </div>
    </footer>
</div>
