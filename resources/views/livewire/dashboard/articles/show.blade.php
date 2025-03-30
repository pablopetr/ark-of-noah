<div>
    <a href="{{ route('home') }}" class="rounded-full bg-gray-100 flex items-center justify-center w-12 h-12">
        <x-icons.arrow-left class="w-8 h-8" />
    </a>
    <p class="border-l-4 border-gray-300 pl-3 mt-8">
        {{ $article->published_at?->format('M d, Y') }}
    </p>
    <h1 class="text-5xl font-bold mt-8">
        {{ $article->title }}
    </h1>
    <div class="mt-8">
        {!! $article->body !!}
    </div>
</div>
