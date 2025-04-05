<button
    x-data="themeToggle()"
    x-init="init()"
    @click="toggleTheme"
    class="relative w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-800 overflow-hidden transition-all"
>
    <div
        x-bind:class="moonVisible ? 'translate-x-0' : 'translate-x-full'"
        class="absolute inset-0 flex items-center justify-center transition-transform duration-500"
    >
        <x-icons.moon
            class="w-6 h-6 text-yellow-500 hover:text-white"
            solid
        />
    </div>

    <div
        x-bind:class="moonVisible ? '-translate-x-full' : 'translate-x-0'"
        class="absolute inset-0 flex items-center justify-center transition-transform duration-500"
    >
        <x-icons.sun
            class="w-6 h-6 hover:text-yellow-500"
        />
    </div>
</button>
