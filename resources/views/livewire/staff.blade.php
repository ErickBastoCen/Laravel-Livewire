<div class="flex flex-col justify-center items-center">
    <br>
    <p class="text-white text-2xl">Conocenos</p>
    <br>
    <br>
    <p class="text-white text-lg">Personal del Instituto Tecnólogico Superior de Motul</p>
    <br>
</div>
<div class="flex">
    <div
        class="flex flex-wrap gap-5 justify-center bg-gray-400 py-6 p-4">
        @foreach ($staff as $item)
            <div>
                <p class="max-w-sm w-60 p-4 bg-blue-900 text-white cursor-pointer rounded-lg justify-center"
                    wire:click="showFormInfo('{{ $item->id }}')">
                    <img src="https://cdn.icon-icons.com/icons2/1993/PNG/512/account_avatar_face_man_people_profile_user_icon_123197.png">
                    <p class="text-blue-900">Nombre:</p> {{ $item->lastName }}, {{ $item->name }}
                    <br>
                    <p class="text-blue-900">Estado:</p> Trabajador del Tecnólogico activo
                    <br>
                    <p class="text-blue-900">Cargo:</p> {{ $item->position }}
                    <br>

                </p>
                <br>
            </div>
        @endforeach
    </div>
</div>
