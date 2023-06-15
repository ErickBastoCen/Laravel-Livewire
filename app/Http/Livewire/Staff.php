<?php

namespace App\Http\Livewire;

use App\Models\Staff as ModelsStaff;
use Livewire\Component;

class Staff extends Component
{
    public $staff;
    public $selectedStaff;
    public function mount()
    {
        $this->selectedStaff = null;
        $this->staff = ModelsStaff::all();
    }

    public function render()
    {
        return view('livewire.staff');
    }

    public function showFormInfo($formId)
    {
        $this->selectedStaff = ModelsStaff::find($formId);
    }
}
