<div>
   Count: {{ $count }}

   {{-- <button wire:click="increment">+</button>
   <button wire:click="decrement">-</button> --}}


    {{-- when mouse hover this button count will increment --}}
   {{-- <button wire:mouseenter="increment">+</button>
   <button wire:mouseenter="decrement">-</button> --}}


    {{-- when click in any windows browser count will increment --}}
   {{-- <button wire:click.window="increment">+</button> --}}

   {{-- when click with any second count will increment --}}
   {{-- <button wire:click.throttle.1000ms="increment">+</button> --}}


   <button wire:click="increment(2)">+</button>

</div>
