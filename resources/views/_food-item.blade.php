<div class="flex justify-between items-center px-4 {{ $loop->last ? '' : 'border-b border-gray-300' }}">

    <div class="flex items-center">
        <a href="/foods/{{$food->id}}/edit">
            @include('icons._edit')
        </a>
        <a href="#" class="ml-4">
            @include('icons._delete')
        </a>
    </div>

    <div class="flex-1 ml-4 ">

        <div class=" flex items-center justify-between py-2">
            <h5 class="border-b border-purple-300">{{ $food->name }}</h5>

        </div>

        <div class="pb-2 flex items-center justify-between ">
            <p class="text-sm ">{{ $food->description }}</p>
        </div>
    </div>

    <div class="font-bold ml-4">{{ $food->priceFormatted() }}</div>
</div>