<?php

namespace App\Livewire\Dashboard\Articles;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{
    public Article $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function render(): View
    {
        return view('livewire.dashboard.articles.show');
    }
}
