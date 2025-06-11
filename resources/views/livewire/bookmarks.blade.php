<div>
    <p>User: {{Auth::user()->name}}</p>
    <h1>Bookmarks</h1>
    <form wire:submit="save">
        <input type='text' wire:model='name'/>
        <input type='text' wire:model='url'/>
        <button type='submit'>Save</button>
    </form>
    <form wire:submit="sendNotification">
    <p wire:loading='sendNotification'>This is being sent to {{ Auth::user()->name }}</p>
       
    </form>
    <button type='submit' wire:click='sendNotification' wire:confirm='Sure you wanna do this?'>Send Notification</button>
    <div>
        @foreach($bookmarks as $bookmark)
        <li wire:key='{{ $bookmark->id }}'> {{$bookmark->name}} {{$bookmark->url}} <div><button wire:click='delete({{ $bookmark->id }})'>Delete</button></div></li> <br>
        @endforeach
    </div>
</div>
