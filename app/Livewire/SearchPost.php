<?php

namespace App\Livewire;

use Livewire\Component;

class SearchPost extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {

        return view('livewire.search-post');
    }
}
