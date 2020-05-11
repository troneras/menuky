<x-app>
    @include('_current-orders')
    @include('_menu-timeline')

    <x-slot name="sidebar">
        @include('_todays-list')
        @include('_order-log')
    </x-slot>

</x-app>

