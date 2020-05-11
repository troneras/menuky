<div class="mb-6  rounded rounded-lg bg-gray-100 border border-gray-400">
    <header class="rounded-t-lg bg-gray-200 p-2 border-b border-gray-400">
        <h3 class="text-sm font-bold">Log</h3>
    </header>

    @foreach(range(1, 6) as $index)
        <div class="border-b border-gray-300 text-xs flex items-center justify-between p-2">
            <span class="italic">12:36</span>
            <p>En preparación Orden #<span class="font-bold">{{$index}}</span></p>
            <button>
                <svg
                        viewBox="0 0 20 20"
                        class="w-3 h-3 text-indigo-600"
                >
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-shape" class="fill-current">
                            <path d="M19,5 L10,10 L19,15 L19,5 Z M10,5 L1,10 L10,15 L10,5 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    @endforeach


</div>