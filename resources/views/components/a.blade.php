@props(['active' => false])

@php
    $classes =
        'px-2.5 py-2 font-medium text-gray-950 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 md:mx-2';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
