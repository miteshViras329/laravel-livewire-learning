<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $extra = 0;

    public function increment($extra = null)
    {
        dd($extra);
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
