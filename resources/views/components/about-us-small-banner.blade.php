<div
    class="flex flex-wrap items-center {{ $fade_direction ?? '' }} pr-4 md:pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute  {{ $position ?? '' }}">
    <img src="{{ asset($icon) }}" alt="how we do it img">
    <h2 class="uppercase text-lg font-extrabold">{{ $text ?? '' }}</h2>
</div>
