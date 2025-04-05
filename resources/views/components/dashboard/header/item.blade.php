@props(['route'])
<li>
    <a
        href="{{ $route ?? '#' }}"
        class="dark:text-gray-400"
    >
        {{ $slot }}
    </a>
</li>
