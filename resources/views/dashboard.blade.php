<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col justify-center items-center">
            <h2 class="font-semibold text-xl text-whitte dark:text-white">
                {{ __('Bienvenido al Tecnológico de Motul') }}
            </h2>

            <br>

            <br>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Haz clic sobre el edificio del que quieres obtener información') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('school-map')
                @role('Super-Admin')
                    
                @endrole
                @role('guest')
                    <x-dash-superuser></x-dash-superuser>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
