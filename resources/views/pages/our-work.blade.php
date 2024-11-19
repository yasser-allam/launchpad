@extends('layouts.main')
@section('main-content')
    <div class="w-11/12 mx-auto">
        <div class="h-[18vh] w-full"></div>
        <span class="uppercase text-7xl font-black">Our Work</span>


        <div class="mb-64" x-data="{ activeTab: 'all-fields' }">
            <div class="flex items-start font-semibold gap-x-8 uppercase my-14">
                <span class="cursor-pointer"
                    :class="{ 'blue border-b-2 border-[#1578FF]': activeTab === 'all-fields' }"
                    @click="activeTab = 'all-fields'">All Fields</span>
                <span class="cursor-pointer"
                    :class="{ 'blue border-b-2 border-[#1578FF]': activeTab === 'it-technology' }"
                    @click="activeTab = 'it-technology'">IT & Technology</span>
                <span class="cursor-pointer"
                    :class="{ 'blue border-b-2 border-[#1578FF]': activeTab === 'service-providers' }"
                    @click="activeTab = 'service-providers'">Service Providers</span>
                <span class="cursor-pointer"
                    :class="{ 'blue border-b-2 border-[#1578FF]': activeTab === 'fashion' }"
                    @click="activeTab = 'fashion'">Fashion</span>
                <span class="cursor-pointer"
                    :class="{ 'blue border-b-2 border-[#1578FF]': activeTab === 'food-beverages' }"
                    @click="activeTab = 'food-beverages'">Food & Beverages</span>
            </div>


            <div x-show="activeTab === 'all-fields'" class="transition-opacity duration-300">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-32">


                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card1.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card2.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card3.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card4.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card5.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card6.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card7.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card8.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card9.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card10.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card11.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card12.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card13.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card14.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card15.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent
                    @component('components.our-work-card', [
                        'bg' => 'assets/our-work/card16.png',
                        'title' => 'ABC Group',
                    ])
                    @endcomponent

                </div>
            </div>

            <div x-show="activeTab === 'it-technology'" class="transition-opacity duration-300">
                <p>Showing IT & Technology items.</p>
            </div>

            <div x-show="activeTab === 'service-providers'" class="transition-opacity duration-300">
                <p>Showing Service Providers items.</p>
            </div>

            <div x-show="activeTab === 'fashion'" class="transition-opacity duration-300">
                <p>Showing Fashion items.</p>
            </div>

            <div x-show="activeTab === 'food-beverages'" class="transition-opacity duration-300">
                <p>Showing Food & Beverages items.</p>
            </div>

        </div>


        <div>
            <span class="text-7xl font-black uppercase ">& Many More ...</span>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-20 mx-20 mt-32 mb-64">
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo1.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo2.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo3.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo4.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo5.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo6.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo7.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo8.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo9.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo10.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo11.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo12.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo13.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo14.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo15.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo16.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo17.svg',
                ])
                @endcomponent
                @component('components.logo', [
                    'logo' => 'assets/icons/our-work/logo18.svg',
                ])
                @endcomponent
            </div>
        </div>

    </div>
@endsection
