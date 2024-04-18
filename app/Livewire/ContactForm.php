<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $data = $this->validate();
        dd($data);
        // Execution doesn't reach here if validation fails.


    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
