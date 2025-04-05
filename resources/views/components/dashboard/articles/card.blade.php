<article class="flex flex-col items-start justify-start">
    <div class="relative w-full">
        <img src="{{ $article->cover_url }}" />
        <div class="absolute inset-0 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>
    </div>
    <div class="max-w-xl">
        <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">
                {{ $article->published_at?->format('M d, Y') }}
            </time>
            <span class="relative rounded-full bg-gray-50 dark:bg-gray-900 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                Technology
            </span>
        </div>
        <div class="group relative">
            <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 dark:text-gray-200 group-hover:text-gray-500">
                <a href="{{ route('article.show', $article) }}" >
                    <span class="absolute inset-0"></span>
                    {{ $article->title }}
                </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                {{ str($article->description)->limit(240) }}
            </p>
        </div>
    </div>
</article>
