<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Article;

class Show extends Component
{

    public $post;

    public function mount($id)
    {
        $this->post = Article::find($id);
    }

    public function render()
    {
        return view('livewire.post.show')
            ->layout('layouts.guest')
            ->layoutData(['title' => $this->post->title]);
    }
}
