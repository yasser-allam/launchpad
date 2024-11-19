<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $phone_number;
    public function render()
    {
        return view('livewire.contact-form');
    }
    public function submit(){
        dd($this->phone_number);
    }
}
