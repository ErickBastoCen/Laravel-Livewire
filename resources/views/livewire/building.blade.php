<div>
    <h1>Edificios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($edificios as $edif)
            <tr>
                <td>{{ $edif->name }}</td>
                <td>
                    <button wire:click="show({{ $edif->id }})">Ver</button>
                    <button wire:click="edit({{ $edif->id }})">Editar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <h1>{{ $building->name }}</h1>
    <p>Dirección: {{ $building->address }}</p>
    <p>Número de pisos: {{ $building->floors }}</p>
    <button wire:click="$emit('goBack')">Volver</button>
</div>
<div>
    <h1>Editar edificio</h1>
    <form wire:submit.prevent="update">
        <label for="name">Nombre:</label><br />
        <input type="text" id="name" wire:model="building.name" /><br />
        <label for="address">Dirección:</label><br />
        <input type="text" id="address" wire:model="building.address" /><br />
        <label for="floors">Número de pisos:</label><br />
        <input type="number" id="floors" wire:model="building.floors" /><br />
        <input type="submit" value="Guardar cambios" />
    </form>
    <button wire:click="$emit('goBack')">Cancelar</button>
</div>