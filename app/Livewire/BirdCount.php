<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BirdForm;

class BirdCount extends Component
{
    public string $notes;
    public int $count;

    public function submit(){
        $this->validate([
"count"=>"required|integer",
"notes"=>"required|string"
        ]);
        BirdForm::create([
            "count"=> $this->pull('count'),
            "notes"=>$this->pull('notes')

        ]);

   
    }
    public function delete($id){
        BirdForm::find($id)->delete();
    }
    //  public function mount($birdCount){
    //     $this->count=$birdCount;
    // }
    public function render()
    {
        $entries=BirdForm::all();
        return view('livewire.bird-count',["entries"=>$entries]);
    }
}
