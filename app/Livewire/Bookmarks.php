<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bookmark;
use App\Notifications\AnnoyUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



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
     public function mount(){
        Auth::loginUsingId(3);
    }

    public function sendNotification(){
        sleep(5);
        Auth::user()->notify(new AnnoyUser());
    }

    public function delete($id){
        //  Auth::user()->bookmarks()->find($id)->delete();
        $bookmark=Bookmark::find($id);  
        Log::info('Current User ID: ' . Auth::id());
    Log::info('Bookmark Owner ID: ' . $bookmark->user_id);
        $this->authorize('delete', $bookmark);
    
        $bookmark->delete();
    }
       
    public function render()
    {
        return view('livewire.bookmarks', ['bookmarks'=>Bookmark::all()]);
    }
}
