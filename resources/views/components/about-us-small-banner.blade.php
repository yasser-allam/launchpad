<div class="flex items-center pr-8 pl-2 bg-white rounded-2xl shadow-xl absolute {{ $position ?? '' }}"
    data-aos={{ $fade_direction ?? '' }}>
    <img src="{{ asset($icon) }}" alt="how we do it img">
    <h2 class="uppercase text-lg font-extrabold">{{ $text ?? '' }}</h2>
</div>
