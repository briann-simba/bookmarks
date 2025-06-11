<?php

use App\Livewire\Lazy;

use App\Livewire\Counter;
use App\Livewire\BirdCount;
use App\Livewire\Bookmarks;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function(){
    return view("welcome");
});
 
Route::get('/counter', Counter::class);
Route::get('/birdcount', BirdCount::class);
Route::get('/lazy', Lazy::class)->lazy();
Route::get('/bookmarks', Bookmarks::class);
