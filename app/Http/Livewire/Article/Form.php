<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $article;
    public $title;
    public $text;
    public $thumbnail;
    public $photo;

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
