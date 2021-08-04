<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class DeleteArticle extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function delete()
    {
        $this->article->delete();
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button class="bg-red-700 hover:bg-red-500 rounded text-white py-2 px-4" wire:click="delete($article)">Delete </button>
            </div>
        blade;
    }
}
