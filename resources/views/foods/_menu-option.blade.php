<div class="mb-6 mx-6 p-4 rounded-lg border border-gray-300 bg-white">
    <div class="flex justify-between items-center">
        <h5>Opción #1</h5>
        <button type="button" wire:click="removeOption({{$loop->index}})">
            @include('icons/_delete')
        </button>
    </div>
    <span class="text-xs pt-1 text-gray-600">Seleccione los extras disponibles para dar a elegir en cada opción. El usuario podrá elegir 1 por cada opción disponible.</span>
    <div>
        <table class="table-full">
            <thead>
            <tr>
                <th class="px-4 py-2">Nombre del extra</th>
                <th class="px-4 py-2">Precio extra (opcional)</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $menuOption as $extra)
                <tr>
                    <td class="border "><input
                                type="text" name="extraName[{{$loop->parent->index}}][]" class="w-full h-full px-4 py-2"
                        ></td>
                    <td class="border ">
                        <div class="flex items-center">
                            <input type="text" class="flex-1 px-4 py-2" name="extraPrice[{{ $loop->parent->index }}][]">
                            <div class="bg-gray-300 border-gray-200 px-4 py-2">
                                €
                            </div>
                        </div>
                    </td>
                    <td class="px-6"><button type="button" wire:click="removeExtra({{$loop->parent->index}} , {{$loop->index}})">@include('icons/_delete')</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button
                type="button" class="bg-gray-400 shadow rounded py-2 px-4 hover:bg-gray-600 mt-4"
                wire:click="addExtra({{$loop->index}})"
        >
            Add Extra
        </button>
    </div>
</div>