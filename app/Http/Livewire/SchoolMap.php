<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;

class SchoolMap extends Component
{
    public $buildings;
    public $selectedBuilding;
    public $showInfo;
    public $showDescription;
    public $showNewData = false;

    public function mount()
    {
        $this->selectedBuilding = null;
        // Obtener la información de los salones de la escuela de la base de datos o de otra fuente de datos
        $this->buildings = Building::all();
    }

    public function render()
    {
        $mapImage = '/images/school-map.jpg';

        return view('livewire.school-map', ['mapImage' => $mapImage]);
    }

    public function showBuildingInfo($buildingId)
    {
        $this->selectedBuilding = Building::find($buildingId);
        $this->showInfo = true;
    }

    public function hideBuildingInfo()
    {
        $this->selectedBuilding = null;
        $this->showDescription = false;
        $this->showInfo = false;
    }

    public function showDescription()
    {

        ///ejemplo de role no va aqui solo lo pegue, era algo asi
        // if $User->hasRole('guest'){
          //  return true
        //}
       //return false

        $this->showDescription = true;
    }

    public function hideDescription()
    {
        $this->showDescription = false;
    }

    public function showNewData()
{
    $this->showNewData = true;
}

}
