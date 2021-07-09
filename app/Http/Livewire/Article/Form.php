<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class Form extends Component
{
    public $article;
    public $title;
    public $text;
    public $thumbnail;

    public function mount()
    {
        $this->title=$this->article->title??'';
        $this->text=$this->article->text??'';
        $this->thumbnail=$this->article->thumbnail??'';
    }

    public function render()
    {
        return view('livewire.article.form');
    }
}
