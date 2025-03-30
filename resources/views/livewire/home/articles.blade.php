<div>
    @foreach($articles as $article)
        <article class="flex flex-row gap-4 p-2 rounded-md shadow-md max-h-44">
            <div>
                <img src="{{ $article->cover_url }}"
                     alt="{{ $article->title }}"
                     class="h-40 object-cover rounded-lg col-span-"
                />
            </div>
            <div class="col-span-4">
                <div class="flex flex-col gap-1">
                    <h2 class="font-semibold tracking-tight leading-7">
                        <div class=""></div>
                        <a
                            href="/articles/crafting-a-design-system-for-a-multiplanetary-future"
                            class="cursor-pointer"
                        >
                            <span class=""></span>
                            <span class="">
                                {{ $article->title }}
                            </span>
                        </a>
                    </h2>
                    <p class="text-sm">
                        Most companies try to stay ahead of the curve when it comes to visual
                        design, but for Planetaria we needed to create a brand that would still
                        inspire us 100 years from now when humanity has spread across our entire
                        solar system.
                    </p>
                    <time class="text-sm" datetime="2022-09-05">September 5, 2022</time>
                    <a href="{{ route('article.show', $article) }}" aria-hidden="true" class="text-gray-900 text-bold text-sm flex items-center mt-4 hover:font-bold hover:text-gray-700 cursor-pointer">
                        <span>
                            Read article
                        </span>
                        <x-icons.chevron-right class="w-4 h-4" />
                    </a>
                </div>
            </div>
        </article>
    @endforeach
</div>
