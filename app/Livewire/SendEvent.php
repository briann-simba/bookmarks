<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public string $message='hello from the other side';
    public function sendMessage(){
        $this->dispatch('messageSent',$this->message);
    }
    public function resetComponent(){
        $this->dispatch('resetComponent');
    }
    public function render()
    {
        return view('livewire.send-event');
    }
}
