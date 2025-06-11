<div>
    <form wire:submit="submit">
   Bird Count <input type="number" wire:model="count"/>
   <br>
    <textarea wire:model="notes" placeholder="Describe the bird"></textarea>
    <button>Add New Entry</button>
    </form>
@if ($errors->any())
<div>
    @foreach($errors->all() as $error)
    <div>{{  $error }}</div>
    @endforeach
</div>
@endif
    <div >
        <ul>
        @foreach($entries as $entry)
        <li wire:key='{{ $entry->id }}' wire:transition>{{$entry->count}} {{$entry->notes}}<div><button wire:click='delete({{ $entry->id }})'>Delete</button></div></li>
        @endforeach
        </ul>
    </div>
</div>
