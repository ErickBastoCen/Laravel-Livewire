<div>
    <center>
        <input wire:model="search" type="text" placeholder="Search users..."/>
        <br>
        <br>
        <ul>
            <li class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Usuarios encontrados:
            </li>
            @foreach($users as $user)
                <li class="text-white">{{ $user->name }}</li>
            @endforeach
        </ul>
    </center>
</div>