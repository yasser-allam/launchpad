<div x-data="{ open: false }" @click="open = !open" class="bg-white shadow-xl rounded-lg p-5 cursor-pointer dtu-effect">
    <div class="flex justify-between items-center">
        <h2 class="uppercase text-lg font-bold">{{ $question ?? '' }}</h2>
        <div class="w-[17px] h-[8px]">

            <template x-if="!open">
                @component('components.image_asp.image', [
                    'url' => 'assets/icons/about-us/arrow-drop-down.svg',
                    'alt' => 'arrow svg',
                    'ratio' => '1-1',
                    'classes' => '',
                    'fit' => 'contain',
                ])
                @endcomponent
            </template>

            <template x-if="open">
                @component('components.image_asp.image', [
                    'url' => 'assets/icons/about-us/blue-arrow-drop-down.svg',
                    'alt' => 'blue arrow svg',
                    'ratio' => '1-1',
                    'classes' => '',
                    'fit' => 'contain',
                ])
                @endcomponent
            </template>
        </div>
    </div>

    <p x-show="open" class="text-lg font-thin mt-6"

        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4"
        x-cloak>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae
        ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod.
        Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl.
    </p>
</div>
