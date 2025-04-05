@props(['id'])
<div x-data="{ open: false }" class="flex justify-center">
    <!-- Modal -->
    <div
        x-show="{{ $id }}"
        style="display: none"
        x-on:keydown.escape.prevent.stop="{{ $id }} = false"
        role="dialog"
        aria-modal="true"
        x-id="['{{ $id }}']"
        :aria-labelledby="$id('{{ $id }}')"
        class="fixed inset-0 z-10 overflow-y-auto cursor-default"
    >
        <!-- Overlay -->
        <div x-show="{{ $id }}" x-transition.opacity class="fixed inset-0 bg-black/25"></div>

        <!-- Panel -->
        <div
            x-show="{{ $id }}"
            x-transition
            x-on:click="{{ $id }} = false"
            class="relative flex min-h-screen items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="{{ $id }}"
                class="relative rounded-xl bg-white p-6 shadow-lg"
            >
               {{ $slot }}
            </div>
        </div>
    </div>
</div>
