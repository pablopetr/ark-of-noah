@section('title', 'Articles | Pablo Eliézer')
@section('description', 'Articles about Laravel, Livewire, PHP, NodeJS, VueJS, Python and more.')

<div>
    <x-dashboard.header.description
        title="Articles"
        description="Here are some of the articles I have written about Laravel, Livewire, PHP, NodeJS, VueJS, Python and more."
    />

    <x-dashboard.articles.grid>
        @foreach($articles as $article)
            <x-dashboard.articles.card :article="$article" wire:key="{{ $article->id }}" />
        @endforeach
    </x-dashboard.articles.grid>

    {{ $articles->links() }}
</div>
