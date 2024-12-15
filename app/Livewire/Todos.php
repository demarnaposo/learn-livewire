<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{

    public $todo = '';
    public $todos = ['who cares'];

    public function add() {

        // dd('hey there');

        $this->todos[] = $this->todo;

        // $this->todo = '';

        $this->reset('todo');
    }

    public function updatedTodo($value)
    {

        // dd($property, $value);
        $this->todo = strtoupper($value);

        // using in blade wire:model.change to automate validation
        // $this->validate();


    }


    // public function updated($property, $value)
    // {

    //     // dd($property, $value);
    //     $this->$property = strtoupper($value);

    // }

    // public function mount() {

    //     $this->todos = [

    //         'Take out trash',
    //         'Do dishes'
    //     ];


    // }

    public function render()
    {
        return view('livewire.todos');
    }
}
