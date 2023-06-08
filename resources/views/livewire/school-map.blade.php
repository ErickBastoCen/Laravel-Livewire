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
            wire:mouseout="showBuildingInfo(null, false)">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="flex justify-center h-44 w-full items-center overflow-hidden bg-gray-300">
                    <img src="https://cdn.icon-icons.com/icons2/2724/PNG/512/office_business_work_workplace_home_company_icon_175608.png" width="100" height="50"/>    
                </div>
                @if (!$showDescription)
                    <div class="px-6 py-2 bg-black border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="font-bold text-xl mb-2 text-white">Edificio {{ $selectedBuilding->letter }}</div>
                        <div class="font-bold text-xl mb-2 text-white">{{ $selectedBuilding->name }}</div>
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between"
                            wire:click="showDescription">
                            <span>Ver descripción</span>
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
    @endif
</div>
