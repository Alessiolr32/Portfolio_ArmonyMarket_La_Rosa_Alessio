<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Mail\WorkWithUsMail;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WorkWithUsForm extends Component
{
    
    #[Validate('required|max:500')]
    public $message = '';
        
    public function sendEmail() {
        
        $this->validate();
        
        $mail = new WorkWithUsMail(Auth::user(), $this->message);
        Mail::to('noreply@armonymarket.com')->send($mail);
        
        $this->reset();
        $this->dispatch('email-sent');
        return redirect()->back()->with('success', __('ui.send_email'));        
    }
    
    public function index()
    {
        return view('livewire.work-with-us-form');
    }
}
