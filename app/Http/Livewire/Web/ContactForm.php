<?php

namespace App\Http\Livewire\Web;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = null;
    public $subject = null;
    public $phone = null;
    public $email = null;
    public $message = null;
    public $success = false;

    public function submit()
    {
        // Validate the Data
        $contact = $this->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        // Save the message
        Contact::create($contact);
        $this->resetInputs();
        $this->success = true;
    }
    public function resetInputs()
    {
        $this->name = null;
        $this->subject = null;
        $this->phone = null;
        $this->email = null;
        $this->message = null;
    }
    public function render()
    {
        return view('livewire.web.contact-form');
    }
}
