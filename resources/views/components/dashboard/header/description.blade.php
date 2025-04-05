@props(['title', 'description', 'photo' => null, 'links' => false])
<div class="flex flex-col gap-6 pb-8">
    @if($photo)
        <div class="w-20 h-20">
            <img src="https://picsum.photos/id/237/200/300" class="w-20 h-20 rounded-full" />
        </div>
    @endif
    @if($title)
        <p class="text-4xl font-bold font-roboto dark:text-white">
            {{ $title }}
        </p>
    @endif

    @if($description)
        <p class="dark:text-white">
            {{ $description }}
        </p>
    @endif

    @if($links)
        <div class="flex flex-row gap-8 justify-end">
            <x-icons.social.x />
            <x-icons.social.github />
            <x-icons.social.linkedin />
        </div>
    @endif
</div>
