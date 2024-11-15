@extends('layouts.main')
@section('main-content')
    <!-- Cover Section -->
    <div id="cover" class="h-screen w-full bg-red-800 ">
        <div class="h-full w-full flex items-center justify-around">
            @component('components.image_asp.image', [
                'url' => 'assets/products/main.png',
                'alt' => 'card img',
                'ratio' => '5-6',
                'classes' => '',
                'fit' => 'cover',
            ])
            @endcomponent

        </div>
    </div>




    <div class="bg-green-700 h-screen w-full"></div>
@endsection
