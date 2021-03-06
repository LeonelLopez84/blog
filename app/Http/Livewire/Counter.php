<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Test;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        Test::create(['counter'=>$this->count]);
        return view('livewire.counter');
    }
}
