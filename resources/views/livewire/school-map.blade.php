
@if (!$showNewData)
    <div class="w-full h-full relative">
        <img src="{{ $mapImage }}" alt="Mapa de la escuela" class="w-full h-full object-contain">
        @foreach ($buildings as $building)
            <div class="absolute bg-transparent cursor-pointer"
                style="left: {{ $building->left }}%; top: {{ $building->top }}%; width: {{ $building->width }}%; height: {{ $building->height }}%;"
                wire:click="showBuildingInfo('{{ $building->id }}')" wire:mouseout="hideBuildingInfo()"></div>
        @endforeach

        @if ($selectedBuilding)
            <div class="absolute h-64"
                style="left: {{ $selectedBuilding->left - 11.5 + 23 > 100 ? 100 - 28 : ($selectedBuilding->left - 11.5 < 0 ? abs($selectedBuilding->left - 11.5) + 1 : $selectedBuilding->left - 11.5) }}%; 
      top: {{ $selectedBuilding->top + 64 > 100 ? abs($selectedBuilding->top) - (abs($selectedBuilding->top + 64 - 99) + 3) : $selectedBuilding->top }}%; "
                wire:mouseover="showBuildingInfo('{{ $selectedBuilding->id }}', true)"
                wire:mouseout="showBuildingInfo(null, false)"">
                <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
                        <img class="object-bottom rounded-full" height="200" width="200"src="https://cdn.icon-icons.com/icons2/1149/PNG/512/1486504363-building-business-company-house-home-real-estate-state_81296.png">
                    </div>
                    <div class="p-6">
                    @if (!$showDescription)
                        <div class="px-6 py-2 bg-white">
                            <div class="font-bold text-xl mb-2">Edificio {{ $selectedBuilding->letter }}</div>
                            <div class="font-bold text-xl mb-2">{{ $selectedBuilding->name }}</div>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between"
                                wire:click="showDescription">
                                <span>información</span>
                                
                            </button>
                        </div>
                    @else
                        <div class="px-6 py-2 bg-white">
                            <div class="font-bold text-xl mb-2">Edificio {{ $selectedBuilding->letter }}</div>
                            <div class="h-24 font-bold text-lg mb-2">{{ $selectedBuilding->description }}</div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
@else
    <h1>fff</h1>
@endif
