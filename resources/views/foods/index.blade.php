<x-app>

    <div>
        @include('_section-header', ['title' => 'Comidas'])
        <x-container>

            @foreach($categories as $category)


                <div class=" border-b border-gray-300">

                    <div class="{{ $loop->first ? 'rounded-t-lg' : '' }} px-4 py-2 bg-gray-300 font-bold">
                        {{ $category->name }}
                    </div>

                    @foreach($category->foods as $food)
                        @include('_food-item')
                    @endforeach

                </div>

            @endforeach
        </x-container>
    </div>

    <x-slot name="sidebar">
        @include('_todays-list')
        @include('_order-log')
    </x-slot>

</x-app>

