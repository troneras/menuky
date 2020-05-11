<header class="container mx-auto flex items-center">
    <h1><img src="/images/logo.png" alt="Menuky" class="h-12"></h1>
    <div class="flex-1 flex">
        <div class="ml-auto">
            <input
                    class="border border-gray-400 p-1 w-full"
                    type="text"
                    name="search"
                    id="search"
                    placeholder="buscar..."
                    required
            >
            @error('search')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button
                    type="submit"
                    class="bg-purple-400 rounded py-2 px-4 hover:bg-purple-500 ml-4"
            >
                <svg viewBox="0 0 20 20" class="h-4 w-4 text-white-400 ">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-shape" fill="currentColor">
                            <path
                                    d="M12.9056439,14.3198574 C11.5509601,15.3729184 9.84871145,16 8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,9.84871145 15.3729184,11.5509601 14.3198574,12.9056439 L19.6568542,18.2426407 L18.2426407,19.6568542 L12.9056439,14.3198574 Z M8,14 C11.3137085,14 14,11.3137085 14,8 C14,4.6862915 11.3137085,2 8,2 C4.6862915,2 2,4.6862915 2,8 C2,11.3137085 4.6862915,14 8,14 Z"
                                    id="Combined-Shape"
                            ></path>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="relative" x-data="{ open: false}">

        <button class="px-2 py-2 hover:bg-purple-500 text-xs ml-12 flex items-center" :class="{ 'bg-purple-500': open }" @click=" open = true">
            <span>Crear Nuevo</span>
            <svg
                    viewBox="0 0 20 20"
                    class="h-3 w-3 ml-1"
            >
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="icon-shape" class="fill-current">
                        <polygon
                                id="Combined-Shape"
                                points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8"
                        ></polygon>
                    </g>
                </g>
            </svg>
        </button>
        @include('_dropdown-new')
    </div>
    <div class="relative ml-4" x-data="{ open: false}">
        <button class="px-2 py-2 hover:bg-purple-500 text-xs flex items-center" :class="{ 'bg-purple-500': open }" @click=" open = true">
            <svg
                    viewBox="0 0 20 20"
                    class="h-4 w-4"
            >
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="icon-shape" class="fill-current">
                        <path
                                d="M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M6.99999861,6.00166547 C6.99999861,4.34389141 8.3465151,3 9.99999722,3 C11.6568507,3 12.9999958,4.33902013 12.9999958,6.00166547 L12.9999958,7.99833453 C12.9999958,9.65610859 11.6534793,11 9.99999722,11 C8.34314374,11 6.99999861,9.66097987 6.99999861,7.99833453 L6.99999861,6.00166547 Z M3.34715433,14.4444439 C5.37306718,13.5169611 7.62616222,13 10,13 C12.3738388,13 14.6269347,13.5169615 16.6528458,14.4444437 C15.2177146,16.5884188 12.7737035,18 10,18 C7.22629656,18 4.78228556,16.5884189 3.34715433,14.4444439 L3.34715433,14.4444439 Z"
                                id="Combined-Shape"
                        ></path>
                    </g>
                </g>
            </svg>
            <span class="ml-2">Admin</span>
            <svg
                    viewBox="0 0 20 20"
                    class="h-3 w-3 ml-1"
            >
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="icon-shape" class="fill-current">
                        <polygon
                                id="Combined-Shape"
                                points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8"
                        ></polygon>
                    </g>
                </g>
            </svg>

        </button>
        @include('_dropdown-admin')

    </div>

</header>