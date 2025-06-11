<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $number;
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function changeCount($number){
        $this->count=$number;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
