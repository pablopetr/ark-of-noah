@section('title', $article->title)
@section('description', $article->description)

<div>
    <a href="{{ route('home') }}" class="rounded-full flex items-center justify-center w-12 h-12 dark:text-gray-400 dark:hover:text-white">
        <x-icons.arrow-left class="w-8 h-8 " />
    </a>
    <h1 class="text-5xl font-bold mt-8 dark:text-white">
        {{ $article->title }}
    </h1>
    <div class="flex justify-end">
        <span class="dark:text-gray-400 text-right">
            {{ $article->published_at?->format('M d, Y') }}
        </span>
    </div>

    <div class="py-4 flex justify-center">
        <img src="{{ $article->cover_url }}"
             alt="{{ $article->title }}"
             class="max-w-full h-96 object-cover rounded-lg"
         />
    </div>
    <div class="mt-10 mb-10 flex flex-col space-y-2 dark:text-white" id="article-body">
        {!! $article->body !!}
    </div>
    <div class="mb-10">
        <p class="dark:text-white mb-10">...</p>
        <p class="dark:text-white">Thanks for reading!</p>
    </div>
</div>
