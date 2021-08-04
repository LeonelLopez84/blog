<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class PostForm extends Component
{
    public $post;
    public $title;
    public $content;

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.content' => 'required|string|max:500',
    ];

    public function mount(Post $post)
    {
        $this->post = new Post();
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function save()
    {
        $this->validate();

        $this->post->save();
    }

    public function render()
    {
        return view('livewire.post.post-form')
                    ->layout('layouts.guest')
                    ->layoutData(['title' => 'Outside']);
    }
}
