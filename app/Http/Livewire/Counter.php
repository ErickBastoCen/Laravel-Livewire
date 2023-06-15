<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class Counter extends Component
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.counter', [
            'users' => User::where('name','like','%'. $this->search .'%')->get(),
        ]);
    }

    public function eliminar()
    {
        
    }
}
