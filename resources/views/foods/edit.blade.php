<x-app>

    <div>
        @include('_section-header', ['title' => 'Editar comida'])
        <x-container>
           @livewire('foods.edit', [
            'food' => $food,
            'categories' => $categories,
            ] )
        </x-container>
    </div>

    <x-slot name="sidebar">
        @include('_todays-list')
        @include('_order-log')
    </x-slot>

</x-app>

@section('page-head-js')
@endsection
@section('page-head-css')
@endsection
@section('page-body-js')
    <script>

    </script>
@endsection