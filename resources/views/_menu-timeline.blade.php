<!-- menu timeline -->

<div class="mb-6 pb-8 rounded rounded-lg bg-gray-100 border border-gray-400">
    <header class="rounded-t-lg bg-gray-200 p-2 border-b border-gray-400">
        <h3 class="text-sm font-bold">Actividad reciente</h3>
    </header>
    @foreach(range(1, 4) as $index)
        <div class="flex border-b border-b-gray-300 p-4">
            <div class="mr-4">
                <img src="https://api.adorable.io/avatars/40/ensalada{{ $index }}" class="rounded-full ">
            </div>
            <div class="flex-1">
                <div class="flex items-center text-sm font-bold mb-2">
                    <h5>John Doe</h5>
                </div>
                <div class="inline-flex ">
                    @foreach(range(1, 3) as $jindex)
                        <div class="flex items-center px-4 py-1 mr-2 bg-gray-200">
                            <div class="text-sm">Carrilleras con salsa de ostras</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>

