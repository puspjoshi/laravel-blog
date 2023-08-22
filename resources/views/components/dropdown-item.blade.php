@props(['active'=>false])

@php

    $classes = "block text-left px-3 leading-5 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white";
    if($active){
        $classes .= " bg-blue-500";
    }
@endphp
<a {{ $attributes(["class"=>$classes]) }}>{{ $slot }}</a>
