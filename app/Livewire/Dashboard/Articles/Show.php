<?php

namespace App\Livewire\Dashboard\Articles;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{
    public Article $article;

    public function mount(Article $article): void
    {
        $this->article = $article;

        $this->article->increment('views');
    }

    public function render(): View
    {
        return view('livewire.dashboard.articles.show');
    }
}
