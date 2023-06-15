
<div class="flex flex-wrap gap-10 justify-center">
    @foreach ($groupedForms as $forms)
        <div class="w-1/5">
            <div class="bg-blue-800 w-full p-5 my-5 rounded-lg text-white">
                <h1 class="font-semibold text-lg">Departamento:</h1>
                <br>
                <h1 class="font-semibold text-lg">{{ $forms->first()->departments->name }}</h1>

            </div>
                <div class="flex flex-wrap gap-4 justify-center bg-white py-6 p-4">
                    @foreach ($forms as $form)
                        <div class="max-w-sm w-44 p-4 bg-gray-100 cursor-pointer"
                            wire:click="showModal('{{ $form->id }}')">
                            <br> 
                            <h1 class="font-sans text-base"> 
                                Trámite: 
                            </h1>
                            <br>
                            <h1 class="font-sans text-base"> 
                                {{ $form->name }}
                            </h1>
                        </div>
                    @endforeach
                @foreach ($forms as $form)
                    @if ($selectedForm && $form->id === $selectedForm->id)
                        <div
                            class="fixed inset-0 flex items-center justify-center z-50 {{ $isModalOpen ? 'block' : 'hidden' }}">
                            <div class="modal-content bg-white p-4">
                                <button wire:click="closeModal"
                                    class="absolute top-5 right-5 mt-4 mr-4 button-corner"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-14 h-14 stroke-gray-300" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <p class="p-2 bg-blue-900 text-white text-center">El trámite seleccionado consiste en:</p>
                                <p class="p-2 text-black text-center">{{ $selectedForm->description }}</p>
                            </div>
                        </div>
                        @if ($isModalOpen)
                            <div class="fondo-claro fixed inset-0 bg-white opacity-50 z-40">
                            </div>
                            <style>
                                body {
                                    overflow: hidden;
                                }
                            </style>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>
