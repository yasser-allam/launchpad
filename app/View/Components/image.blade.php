@php
    $default_fit = "cover";
    $default_ratio="1-1";
    $default_classes="";
    $default_alt="";
    $default_loop="";

    $fit = isset($fit) ? (!empty($fit) ? $fit : $default_fit ): $default_fit;
    $ratio = isset($ratio) ? (!empty($ratio) ? $ratio : $default_ratio ): $default_ratio;
    $classes = isset($classes) ? (!empty($classes) ? $classes : $default_classes ): $default_classes;
    $alt = isset($alt) ? (!empty($alt) ? $alt : $default_alt ): $default_alt;
    $loop=isset($loop) ? (!empty($loop) ? $loop : $default_loop ): $default_loop
@endphp

<div class="asp  {{$fit}} asp-{{$ratio}} {{$classes}} ">

        {!! picture($url, $alt ) !!}


    {{$slot}}

    @if(isset($blackOverlay))
        <div class="black-overlay"></div>
    @endif

</div>
