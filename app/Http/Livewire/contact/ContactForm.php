<?php

namespace App\Http\Livewire\contact;

use App\Models\ContactMessage;
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitContact()
    {
        $this->validate();

        $contact = new ContactMessage;
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;

        $contact->save();

        $this->success = 'Your message was sent successfully!';
        $this->refresh();
    }

    public function refresh()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
        $this->phone = '';
    }
}
