<div>

    <form action="/foods/{{$food_id}}" method="POST" class="p-4" wire:submit.prevent="submit">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="name"
            >
                Nombre
            </label>

            <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="name"
                    wire:model="name"
                    id="name"

            >
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="description"
            >
                Descripción
            </label>

            <textarea
                    name="description"
                    id="description"
                    class="w-full border border-gray-400 p-2 h-40"
                    wire:model="description"
            >{{  $description }}</textarea>

            @error('description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="categories"
            >
                Categoría
            </label>

            <select class="category-select border border-gray-400 p-2 w-auto" multiple name="categories[]">
                @foreach($categories as $category)
                    <option
                            value="{{$category->id}}"
                            {{ $categories->contains($category->id) ?  'selected="selected"' : ''  }}
                    >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>

            @error('categories')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="price"
            >
                Precio
            </label>

            <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="price"
                    wire:model="price"
                    id="price"
                    required
            >
            <span class="text-xs pt-1 text-gray-600">Introduzca el precio usando punto para los decimales:  XXX.XX</span>

            @error('price')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="menu-options"
            >
                Opciones del menú
            </label>
            <button type="button" class="bg-white shadow rounded py-2 px-4 hover:bg-gray-200" wire:click="addOption">
                Añadir
                opción
            </button>

        </div>
        @foreach($menuOptions as $menuOption)
            @include('foods._menu-option')
        @endforeach

        <div class="mb-6">
            <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                Guardar
            </button>
        </div>


    </form>
</div>
