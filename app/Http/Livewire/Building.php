<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;

class MyBuilding extends Component 
{
    public $edificios, $edificio, $ubicacion;
    public $editar = false;
    public $crear = false;
    public $letra;
    public $nombre;
    public $nombrecomun;
    public $referencia;

    protected $rules = [
        'letra' => 'required',
        'nombre' => 'required',
        'nombrecomun' => 'required',
        'ubicacion' => 'required',
        'referencia' => 'required'
    ];

    public function mount()
    {
        $this->state = $this->state->set('building', true);
    }

    public function render()
    {
        $this->edificios = MyBuilding::all();
        return view('building', ['edificios' => $this->edificios]);
    }

    public function show($id)
    {
        $this->edificio = MyBuilding::findOrFail($id);
        $this->editar = true;
    }

    public function edit($id)
    {
        $this->edificio = MyBuilding::findOrFail($id);
        $this->editar = true;
    }

    public function update($id)
    {
        $this->validate();
        $this->edificio = MyBuilding::findOrFail($id);
        $this->edificio->ubicacion = $this->ubicacion;
        $this->edificio->nombre = $this->nombre;
        $this->edificio->nombrecomun = $this->nombrecomun;
        $this->edificio->referencia = $this->referencia;
        $this->edificio->save();
        $this->editar = false;
    }

    public function create()
    {
        $this->crear = true;
    }

    public function cancelar()
    {
        $this->crear = false;
    }

    public function submit()
    {
        $this->validate();
        $nuevo_edificio = new MyBuilding();
        $nuevo_edificio->ubicacion = $this->ubicacion;
        $nuevo_edificio->nombre = $this->nombre;
        $nuevo_edificio->nombrecomun = $this->nombrecomun;
        $nuevo_edificio->referencia = $this->referencia;
        $nuevo_edificio->save();
        $this->crear = false;
    }
}
