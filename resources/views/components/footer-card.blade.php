<div class="relative w-[610px] lg:h-[214px] text-white">
    {{-- <h-52></h-52> --}}
    <img class="absolute object-cover h-full" src="{{ asset('assets/footer/card.png') }}" alt="card image">
    <div class="flex flex-col p-10">
        <span class="text-lg uppercase"> {{ $location }}</span>
        <span class="text-sm font-thin mt-4 mb-12"> {{ $description }}</span>
        <div class="flex space-x-4">
            <img src="{{ asset('assets/icons/footer/phone.svg') }}" alt="phone svg">
            <span class="text-sm font-thin"> {{ $phone }}</span>
        </div>
    </div>
</div>
