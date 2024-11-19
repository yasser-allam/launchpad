<div>
    @php
        if ($theme == 'light') {
            $theme = 'text-black bg-white hover:text-white hover:bg-transparent hover:border hover:border-white';
        } else {
            $theme = 'text-white bg-black hover:text-black hover:bg-transparent hover:border hover:border-black';
        }
    @endphp

    <button
        class=" {{ $classes ?? '' }} uppercase flex items-center justify-center py-4 px-6 rounded-full {{ $theme ?? '' }} transition duration-300 ">
        {{ $name ?? '' }}
    </button>
</div>
