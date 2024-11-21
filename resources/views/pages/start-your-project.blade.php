@extends('layouts.main')
@section('main-content')
    <div class="relative w-full h-full">
        <video
            autoplay
            loop
            muted
            class="w-full max-h-[150vh] object-cover">
            <source
                src="{{ asset('assets/start-your-project/dust floating in the air on black background  02_preview.mp4') }}"
                type="video/mp4" />
        </video>
    </div>

    <div class="absolute top-[20%] left-[10%] bg-white rounded-xl h-[70%] w-[40%] p-16 ltr-effect">

        <livewire:start-your-project />

    </div>
@endsection
