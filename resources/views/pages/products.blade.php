@extends('layouts.main')
@section('main-content')
    @component('components.head-banner', [
        'img' => 'assets/products/main.png',
        'text' => 'A one-stop-shop for your digital products',
    ])
    @endcomponent


    <div id="next" class="lg:w-11/12 w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-10 gap-10">
        <div class="dtu-effect max-[640px]:p-4">
            @component('components.products-card', [
                'gradient' => 'from-[#372B75] to-[#2BA4E3]',
                'bgIcon' => 'assets/products/card1-cover.png',
                'title' => '‘HEYA’ ECOMMERCE SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">
            @component('components.products-card', [
                'gradient' => 'from-[#3A9E81] to-[#085A7F]',
                'bgIcon' => 'assets/products/card2-cover.png',
                'title' => 'OMNICHANNEL TICKETING SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#372B75] to-[#8F78FA]',
                'bgIcon' => 'assets/products/card3-cover.png',
                'title' => '‘HEYA’ Q-COMMERCE SUPERMARKET SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#3A9E81] to-[#9878EF]',
                'bgIcon' => 'assets/products/card4-cover.png',
                'title' => '‘HEYA’ CORPORATE WEBSITE SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#D96B6F] to-[#150074]',
                'bgIcon' => 'assets/products/card5-cover.png',
                'title' => '‘HEYA’ LOYALTY SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#3A9E81] to-[#150074]',
                'bgIcon' => 'assets/products/card6-cover.png',
                'title' => 'Driver SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#4C9797] to-[#36A0DB]',
                'bgIcon' => 'assets/products/card7-cover.png',
                'title' => 'Shipments Returns Module',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
        <div class="dtu-effect max-[640px]:p-4">

            @component('components.products-card', [
                'gradient' => 'from-[#D96B6F] to-[#2BA4E3]',
                'bgIcon' => 'assets/products/card8-cover.png',
                'title' => 'WAREHOUSE MANAGEMENT SYSTEM SOLUTION',
                'description' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ])
            @endcomponent
        </div>
    </div>


    <div class="h-64"></div>
@endsection
