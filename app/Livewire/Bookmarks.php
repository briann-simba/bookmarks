<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bookmarks as Bookmark;
use Illuminate\Support\Facades\Auth;
use App\Models\Bookmarks as ModelsBookmarks;

class Bookmarks extends Component
{
    public $name;
    public $url;
    public function save(){
    //    Auth::user()->bookmarks()->create([
    //     'name'=>$this->name,
    //     'url'=>$this->url
    //    ]);
    Bookmark::create([
        'name'=>$this->name,
        'url'=>$this->url,
        'user_id'=>Auth::user()->id

       ]);

    }
    public function delete($id){
    //  Auth::user()->bookmarks()->find($id)->delete();
Bookmark::find($id)->delete();    
}
    public function mount(){
        Auth::loginUsingId(2);
    }
    public function render()
    {
        return view('livewire.bookmarks', ['bookmarks'=>Bookmark::all()]);
    }
}
