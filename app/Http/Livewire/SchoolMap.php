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
    
    public function mount()
    {
        $this->selectedBuilding = null;
        // Obtener la información de los edificios
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
        $this->showDescription = true;
    }

    public function hideDescription()
    {
        $this->showDescription = false;
    }
}
