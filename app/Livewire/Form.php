<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    public $email;
    public $remarks;

    public function sendEmail() {
        $this->validate([
            'email' => 'required|email',
            'remarks' => 'required|min:10'
        ]);

        // send mail here....
        Mail::to('infor@solarpanelapp.nl')->send(new \App\Mail\ContactForm($this->email, $this->remarks));

        // reset input fields
        $this->email = '';
        $this->remarks = '';

        // success message
        session()->flash('message', 'Je bericht is verzonden!');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
