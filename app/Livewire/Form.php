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


        // success message
        session()->flash('message', 'Je bericht is verzonden!');

        // reset input fields
        $this->email = '';
        $this->remarks = '';
    }

    public function render()
    {
        return view('livewire.form');
    }
}
