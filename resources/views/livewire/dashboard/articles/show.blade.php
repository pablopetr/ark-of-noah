@section('title', $article->title)
@section('description', $article->description)

<div>
    <a href="{{ route('home') }}" class="rounded-full flex items-center justify-center w-12 h-12 dark:text-gray-400 dark:hover:text-white">
        <x-icons.arrow-left class="w-8 h-8 " />
    </a>
    <p class="border-l-4 border-gray-300 pl-3 mt-8 dark:text-gray-400">
        {{ $article->published_at?->format('M d, Y') }}
    </p>
    <h1 class="text-5xl font-bold mt-8 dark:text-white">
        {{ $article->title }}
    </h1>
    <div class="py-4 flex justify-center">
        <img src="{{ $article->cover_url }}"
             alt="{{ $article->title }}"
             class="max-w-full h-96 object-cover rounded-lg"
         />
    </div>
    <div class="mt-10 flex flex-col space-y-2 dark:text-white" id="article-body">
        {!! $article->body !!}
    </div>
</div>
