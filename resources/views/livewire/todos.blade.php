<div>

    <form wire:submit="add">
        {{-- <input type="text" wire:model="todo">  --}}
        {{-- <input type="text" wire:model.live="todo"> // live will auto update validation --}}
        <input type="text" wire:model="todo">

        <p>Current todo : {{ $todo }}</p>

        <button type="submit">add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
