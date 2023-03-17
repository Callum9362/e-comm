<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $success;
    public $name;
    public $email;
    public $message;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required|min:5',
        'phone' => 'required'
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function refresh()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
        $this->phone = '';
    }
}
