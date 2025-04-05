<div class="flex justify-between py-8 items-center">
    <div></div>
    <ul class="flex gap-6">
        <x-dashboard.header.item :route="route('articles')">Articles</x-dashboard.header.item>
        <x-dashboard.header.item :route="route('projects')">Projects</x-dashboard.header.item>
        <x-dashboard.header.item>About</x-dashboard.header.item>
    </ul>
    <div class="flex gap-6 items-center">
        <x-dashboard.header.settings.theme />
        <x-dashboard.header.settings.language />
    </div>
</div>
