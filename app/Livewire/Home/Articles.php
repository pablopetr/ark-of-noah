<?php

namespace App\Livewire\Home;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Articles extends Component
{
    public function render(): View
    {
        $articles = Article::query()
            ->paginate(12);

        return view('livewire.home.articles', [
            'articles' => $articles,
        ]);
    }
}
