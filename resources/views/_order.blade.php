<div class="text-xs {{ $loop->last ? '' : 'border-b border-b-grey-400' }}">

    <div class="{{ $loop->first ? 'rounded-t-lg' : '' }} bg-gray-300 px-6 font-bold text-sm">
        <h5>Orden #{{$order->id}}</h5>
    </div>

    <div class="flex justify-between px-4">
        <div class="flex items-center">
            <img class="rounded-full" src="https://api.adorable.io/avatars/40/{{$order->id}}" alt="">

        </div>
        <div class="flex-1 px-4 ">
            <ul>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">2 x &nbsp;</span>
                    <span>Chocos</span>
                </li>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">1 x &nbsp;</span>
                    <span>Bravas</span>
                </li>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">2 x &nbsp;</span>
                    <span>Cocacola</span>
                </li>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">2 x &nbsp;</span>
                    <span>Cerveza Carlsberg</span>
                </li>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">2 x &nbsp;</span>
                    <span>Cerveza Paulaner</span>
                </li>
                <li class="flex border-b border-gray-300 py-1">
                    <span class="font-bold">2 x &nbsp;</span>
                    <span>Vino Rioja Crianza Marqués de Murrieta</span>
                </li>
            </ul>
        </div>
        <div class="flex flex-col items-center justify-center px-6">
            <svg
                    viewBox="0 0 20 20"
                    class="w-10 h-10 mb-4 block"
            >
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="icon-shape" class="fill-current">
                        <path
                                d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 Z M15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 Z M9,5 L11,5 L11,11 L9,11 L9,5 Z M9,13 L11,13 L11,15 L9,15 L9,13 Z"
                                id="Combined-Shape"
                        ></path>
                    </g>
                </g>
            </svg>
            <span>{{ $order->status }}</span>
        </div>
    </div>
    <header class="font-bold mb-2 mt-2 flex">
        @if($order->online)
            <div class="bg-purple-500 rounded-r-lg flex items-center p-4">
                <svg viewBox="0 0 20 20" class="w-8 h-8 ">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-shape" class="fill-current">
                            <path
                                    d="M17.747965,12 C17.912494,11.3607602 18,10.6905991 18,10 C18,9.30940086 17.912494,8.63923984 17.747965,8 L13.9319635,8 C13.9770158,8.64627227 14,9.31512813 14,10 C14,10.6848719 13.9770158,11.3537277 13.9319635,12 L17.747965,12 L17.747965,12 Z M16.9297424,14 C15.9997274,15.6077187 14.5262862,16.8617486 12.7605851,17.5109236 C13.1807787,16.5491202 13.5012461,15.3524505 13.7109556,14 L16.9297424,14 L16.9297424,14 Z M8.08134222,12 C8.02912147,11.3608387 8,10.6906922 8,10 C8,9.30930775 8.02912147,8.63916129 8.08134222,8 L11.9186578,8 C11.9708785,8.63916129 12,9.30930775 12,10 C12,10.6906922 11.9708785,11.3608387 11.9186578,12 L8.08134222,12 L8.08134222,12 Z M8.33245212,14 C8.74471091,16.3918507 9.45909367,18 10,18 C10.5409063,18 11.2552891,16.3918507 11.6675479,14 L8.33245212,14 L8.33245212,14 Z M2.25203497,12 C2.08750601,11.3607602 2,10.6905991 2,10 C2,9.30940086 2.08750601,8.63923984 2.25203497,8 L6.06803651,8 C6.02298421,8.64627227 6,9.31512813 6,10 C6,10.6848719 6.02298421,11.3537277 6.06803651,12 L2.25203497,12 L2.25203497,12 Z M3.07025756,14 C4.00027261,15.6077187 5.47371379,16.8617486 7.23941494,17.5109236 C6.81922128,16.5491202 6.49875389,15.3524505 6.28904438,14 L3.07025756,14 L3.07025756,14 Z M16.9297424,6 C15.9997274,4.39228131 14.5262862,3.13825137 12.7605851,2.48907637 C13.1807787,3.45087984 13.5012461,4.64754949 13.7109556,6 L16.9297424,6 L16.9297424,6 Z M8.33245212,6 C8.74471091,3.60814928 9.45909367,2 10,2 C10.5409063,2 11.2552891,3.60814928 11.6675479,6 L8.33245212,6 L8.33245212,6 Z M3.07025756,6 C4.00027261,4.39228131 5.47371379,3.13825137 7.23941494,2.48907637 C6.81922128,3.45087984 6.49875389,4.64754949 6.28904438,6 L3.07025756,6 L3.07025756,6 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 L10,20 Z"
                                    id="Combined-Shape"
                            ></path>
                        </g>
                    </g>
                </svg>
                <span class="ml-4">Pedido online</span>
            </div>
        @endif
        <div class="flex-1 flex justify-around">
            <div class="flex items-center">
                <svg viewBox="0 0 20 20" class="h-6 w-6">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-shape" class="fill-current">
                            <path d="M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M11,15 L11,17 L9,17 L9,15 L6,15 L6,13 L10.5838882,13 L11.9970707,13 C12.5621186,13 13,12.5522847 13,12 C13,11.4438648 12.5509732,11 11.9970707,11 L10.5838882,11 L8,11 C6.34314575,11 5,9.65685425 5,8 C5,6.34314575 6.34314575,5 8,5 L9,5 L9,3 L11,3 L11,5 L14,5 L14,7 L9.41464715,7 L7.99077797,7 C7.45097518,7 7,7.44771525 7,8 C7,8.55613518 7.44358641,9 7.99077797,9 L9.41464715,9 L12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 L11,15 Z"></path>
                        </g>
                    </g>
                </svg>
                <span class="ml-2">Total: {{ $order->totalFormatted() }}</span>
            </div>
            <div class="flex items-center">
                <svg viewBox="0 0 20 20" class="w-6 h-6">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-shape" class="fill-current">
                            <path
                                    d="M14.9056439,5.68014258 C13.7991209,4.81998894 12.4607085,4.24404153 11,4.06189375 L11,2 L9,2 L9,4.06189375 C5.05368842,4.55399184 2,7.92038235 2,12 C2,16.418278 5.581722,20 10,20 C14.418278,20 18,16.418278 18,12 C18,10.1512885 17.3729184,8.44903985 16.3198574,7.09435615 L17.7781746,5.63603897 L16.363961,4.22182541 L14.9056439,5.68014258 Z M10,18 C13.3137085,18 16,15.3137085 16,12 C16,8.6862915 13.3137085,6 10,6 C6.6862915,6 4,8.6862915 4,12 C4,15.3137085 6.6862915,18 10,18 Z M7,0 L13,0 L13,2 L7,2 L7,0 Z M12.1213203,8.46446609 L13.5355339,9.87867966 L10,13.4142136 L8.58578644,12 L12.1213203,8.46446609 Z"
                                    id="Combined-Shape"
                            ></path>
                        </g>
                    </g>
                </svg>
                <span class="ml-2">Esperando: {{$order->elapsedTime()}} min </span>
            </div>
        </div>
    </header>

</div>