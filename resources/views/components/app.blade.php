<x-master>
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-48">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:px-10">
            {{ $slot }}
        </div>

        <div class="lg:w-1/6" style="max-width: 700px;">

            {{ $sidebar }}
        </div>
    </div>
</x-master>
