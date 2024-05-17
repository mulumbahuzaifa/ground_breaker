<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $name;
    public $email;
    public $message;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->message = $this->message;
        // dd($contact);
        $contact->save();
        session()->flash('message','Thank, Your message has been sent successfully! We will get back to you shortly.');

        // $this->sendOrderConfirmationMail($contact);
    }

    // public function sendOrderConfirmationMail($contact){
    //     Mail::to($contact->email)->send(new ContactMail($contact));
    // }
    public function render()
    {
        return view('livewire.contact-us-component');
    }
}
