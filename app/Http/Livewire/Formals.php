<?php

namespace App\Http\Livewire;

use App\Models\Formalities;
use Livewire\Component;

class Formals extends Component
{
    public $forms;
    public $selectedForm;
    public $isModalOpen = false;

    public function mount()
    {
        $this->selectedForm = null;
        $this->forms = Formalities::all();
    }

    public function render()
    {
        $forms = Formalities::with('departments')->get();
        $groupedForms = $forms->groupBy('id_department');

        return view('livewire.formals', compact('groupedForms'));
    }

    public function showModal($formId)
    {
        $this->selectedForm = Formalities::find($formId);
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->selectedForm = null;
        $this->isModalOpen = false;
    }
}
